<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Libraries;

use Illuminate\Database\ConnectionInterface;

class TransactionState
{
    private $connection;

    private $commits = [];
    private $rollbacks = [];

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function isCompleted()
    {
        return $this->connection->transactionLevel() === 0;
    }

    public function addCommittable($committable)
    {
        $this->commits[] = $committable;
    }

    public function addRollbackable($rollbackable)
    {
        $this->rollbacks[] = $rollbackable;
    }

    public function commit()
    {
        foreach ($this->uniqueCommits() as $commit) {
            $commit->afterCommit();
        }

        $this->clear();
    }

    public function rollback()
    {
        foreach ($this->uniqueRollbacks() as $rollback) {
            $rollback->afterRollback();
        }

        $this->clear();
    }

    public function clear()
    {
        $this->commits = [];
        $this->rollbacks = [];
    }

    private function uniqueCommits()
    {
        return array_unique($this->commits);
    }

    private function uniqueRollbacks()
    {
        return array_unique($this->rollbacks);
    }
}
