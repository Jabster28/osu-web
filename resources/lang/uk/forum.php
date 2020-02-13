<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
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

return [
    'pinned_topics' => 'Закріплені теми',
    'slogan' => "небезпечно грати одному.",
    'subforums' => 'Підфоруми',
    'title' => 'osu! форуми',

    'covers' => [
        'edit' => 'Редагувати обкладинку',

        'create' => [
            '_' => 'Встановити зображення обкладинки',
            'button' => 'Завантажити зображення',
            'info' => 'Роздільна здатність зображення повинно бути :dimensions. Для завантаження зображення, ви можете просто кинути його сюди.',
        ],

        'destroy' => [
            '_' => 'Видалити зображення обкладинки',
            'confirm' => 'Ви впевнені, що хочете видалити зображення обкладинки?',
        ],
    ],

    'forums' => [
        'latest_post' => 'Останній пост',

        'index' => [
            'title' => 'Список форумів',
        ],

        'topics' => [
            'empty' => 'Тем немає!',
        ],
    ],

    'mark_as_read' => [
        'forum' => 'Позначити розділ як прочитаний',
        'forums' => 'Позначити розділи як прочитані',
        'busy' => 'Відмічається як прочитане...',
    ],

    'post' => [
        'confirm_destroy' => 'Видалити відповідь?',
        'confirm_restore' => 'Відновити відповідь?',
        'edited' => 'Останній раз відредагований :user :when, відредагований :count раз.',
        'posted_at' => 'написано :when',

        'actions' => [
            'destroy' => 'Видалити відповідь',
            'restore' => 'Відновити відповідь',
            'edit' => 'Редагувати відповідь',
        ],

        'create' => [
            'title' => [
                'reply' => 'Нова відповідь',
            ],
        ],

        'info' => [
            'post_count' => ':count_delimited пост|:count_delimited постів',
            'topic_starter' => 'Автор теми',
        ],
    ],

    'search' => [
        'go_to_post' => 'Перейти до відповіді',
        'post_number_input' => 'введіть номер відповіді',
        'total_posts' => ':posts_count відповідей',
    ],

    'topic' => [
        'deleted' => 'видалена тема',
        'go_to_latest' => 'показати останню відповідь',
        'latest_post' => ':when від :user',
        'latest_reply_by' => 'остання відповідь від :user',
        'new_topic' => 'Нова тема',
        'new_topic_login' => 'Увійдіть, щоб створити нову тему',
        'post_reply' => 'Відповісти',
        'reply_box_placeholder' => 'Введіть текст для відповіді',
        'reply_title_prefix' => 'Відповідь',
        'started_by' => 'від :user',
        'started_by_verbose' => 'почато :user',

        'create' => [
            'close' => 'Закрити',
            'preview' => 'Попередній перегляд',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Написати',
            'submit' => 'Опублікувати',

            'necropost' => [
                'default' => 'Дана тема була довгий час неактивна. Додавайте сюди записи, тільки якщо у вас є на те вагома причина.',

                'new_topic' => [
                    '_' => "Дана тема була довгий час неактивна. Якщо у вас немає причин додавати сюди коментарі, будь ласка :create.",
                    'create' => 'створіть нову тему',
                ],
            ],

            'placeholder' => [
                'body' => 'Введіть вміст сторінки',
                'title' => 'Заголовок теми',
            ],
        ],

        'jump' => [
            'enter' => 'натисніть для переходу до певної відповіді',
            'first' => 'перейти до першої відповіді',
            'last' => 'перейти до останньої відповіді',
            'next' => 'пропустити наступні 10 відповідей',
            'previous' => 'повернутися до попередніх 10 відповідей',
        ],

        'post_edit' => [
            'cancel' => 'Відмінити',
            'post' => 'Зберегти',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title_compact' => 'підписки на теми',

            'box' => [
                'total' => 'Підписок на теми',
                'unread' => 'З новими відповідями',
            ],

            'info' => [
                'total' => 'Всього підписок :total.',
                'unread' => 'У вас :unread непрочитаних відповідей до тем, за якими ви стежите.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Відписатися від теми?',
                'title' => 'Відписатись',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Теми',

        'actions' => [
            'login_reply' => 'Увійдіть, щоб відповісти',
            'reply' => 'Відповісти',
            'reply_with_quote' => 'Відповісти з цитуванням',
            'search' => 'Шукати',
        ],

        'create' => [
            'create_poll' => 'Створення опитування',

            'preview' => 'Попередній перегляд',

            'create_poll_button' => [
                'add' => 'Створити опитування',
                'remove' => 'Скасувати опитування',
            ],

            'poll' => [
                'hide_results' => 'Приховати результати опитування.',
                'hide_results_info' => 'Вони будуть показані тільки після закінчення опитування.',
                'length' => 'Опитування має тривати',
                'length_days_suffix' => 'днів',
                'length_info' => 'Залиште порожнім для зняття обмеження',
                'max_options' => 'Кількість відповідей',
                'max_options_info' => 'Вкажіть кількість варіантів, за які зможе проголосувати кожен користувач.',
                'options' => 'Варіанти відповіді',
                'options_info' => 'Кожен варіант в новому рядку. Ти можеш ввести до 10 варіантів.',
                'title' => 'Питання',
                'vote_change' => 'Дозволити повторну відповідь.',
                'vote_change_info' => 'Якщо включено, користувачі зможуть змінити свою відповідь.',
            ],
        ],

        'edit_title' => [
            'start' => 'Редагувати заголовок',
        ],

        'index' => [
            'feature_votes' => 'кількість голосів',
            'replies' => 'відповідей',
            'views' => 'переглядів',
        ],

        'issue_tag_added' => [
            'to_0' => 'Прибрати тег "додано"',
            'to_0_done' => 'Прибрано тег "додано"',
            'to_1' => 'Додати тег "додано"',
            'to_1_done' => 'Додано тег "додано"',
        ],

        'issue_tag_assigned' => [
            'to_0' => 'Прибрати тег "присвоєно"',
            'to_0_done' => 'Прибрано тег "присвоєно"',
            'to_1' => 'Додати тег "присвоєно"',
            'to_1_done' => 'Додано тег "присвоєно"',
        ],

        'issue_tag_confirmed' => [
            'to_0' => 'Прибрати тег "підтверджено"',
            'to_0_done' => 'Прибрано тег "підтверджено"',
            'to_1' => 'Додати тег "підтверджено"',
            'to_1_done' => 'Додано тег "підтверджено"',
        ],

        'issue_tag_duplicate' => [
            'to_0' => 'Прибрати тег "дублікат"',
            'to_0_done' => 'Прибрати тег "дублікат"',
            'to_1' => 'Додати тег "дублікат"',
            'to_1_done' => 'Додано тег "дублікат"',
        ],

        'issue_tag_invalid' => [
            'to_0' => 'Прибрати тег "недійсне"',
            'to_0_done' => 'Прибрано тег "недійсне"',
            'to_1' => 'Додати тег "недійсне"',
            'to_1_done' => 'Додано тег "недійсне"',
        ],

        'issue_tag_resolved' => [
            'to_0' => 'Прибрати тег "вирішено"',
            'to_0_done' => 'Прибрано тег "вирішено"',
            'to_1' => 'Додати тег "вирішено"',
            'to_1_done' => 'Додано тег "вирішено"',
        ],

        'lock' => [
            'is_locked' => 'Ця тема закрита відповідати в ній неможливо',
            'to_0' => 'Відкрити тему',
            'to_0_done' => 'Тему відкрито',
            'to_1' => 'Закрити тему',
            'to_1_done' => 'Тему закрито',
        ],

        'moderate_move' => [
            'title' => 'Перемістити на інший форум',
        ],

        'moderate_pin' => [
            'to_0' => 'Відкріпити тему',
            'to_0_done' => 'Тему відкріплено',
            'to_1' => 'Закріпити тему',
            'to_1_done' => 'Тему закріплено',
            'to_2' => 'Закріпити тему і відмітити як анонс',
            'to_2_done' => 'Тему закріплено і відзначено як анонс',
        ],

        'moderate_toggle_deleted' => [
            'show' => 'Показати видалені пости',
            'hide' => 'Приховати видалені пости',
        ],

        'show' => [
            'deleted-posts' => 'Видалено відповідей',
            'total_posts' => 'Всього відповідей',

            'feature_vote' => [
                'current' => 'Поточний пріоритет: +:count',
                'do' => 'Просунути даний запит',

                'info' => [
                    '_' => 'Це :feature_request. За ідею можна проголосувати тільки з :supporters.',
                    'feature_request' => 'запропонована ідея',
                    'supporters' => 'osu!прихильник',
                ],

                'user' => [
                    'count' => '{0} немає голосів|{1} :count_delimited голос|[2,*] :count_delimited голоси',
                    'current' => 'У вас залишилося :votes голосів.',
                    'not_enough' => "У вас більше немає голосів",
                ],
            ],

            'poll' => [
                'edit' => 'Редагування опитування',
                'edit_warning' => 'Редагування опитування призведе до видалення поточних результатів!',
                'vote' => 'Голосувати',

                'button' => [
                    'change_vote' => 'Поміняти голос',
                    'edit' => 'Редагувати опитування',
                    'view_results' => 'Побачити результати',
                    'vote' => 'Проголосувати',
                ],

                'detail' => [
                    'end_time' => 'Опитування буде закрито :time',
                    'ended' => 'Опитування завершено :time',
                    'results_hidden' => 'Результати будуть показані після закінчення опитування.',
                    'total' => 'Всього голосів: :count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => 'Не в закладках',
            'to_watching' => 'Закладки',
            'to_watching_mail' => 'В закладки з оповіщенням',
            'tooltip_mail_disable' => 'Оповіщення включені. Натисніть, щоб відключити',
            'tooltip_mail_enable' => 'Оповіщення відключено. Натисніть, щоб включити',
        ],
    ],
];
