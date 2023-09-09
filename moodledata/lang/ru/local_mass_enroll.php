<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_mass_enroll', language 'ru', version '4.2'.
 *
 * @package     local_mass_enroll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['creategroupings'] = 'Создавать потоки, если необходимо';
$string['creategroups'] = 'Создавать группы, если необходимо';
$string['enablemassenrol'] = 'Разрешить массовое зачисление из управления курсом';
$string['enablemassenrol_help'] = 'Включите эту опцию, чтобы разрешить дополнение для массового зачисления в блоке управления курсом';
$string['enablemassunenrol'] = 'Разрешить массовое отчисление из управления курсом';
$string['enablemassunenrol_help'] = 'Включите эту опцию, чтобы разрешить дополнение для массового отчисления в блоке управления курсом';
$string['enroll'] = 'Зачислить их на мой курс';
$string['firstcolumn'] = 'Первая колонка содержит';
$string['idnumber'] = 'Id номер';
$string['im:already_in'] = 'уже зачислены - {$a}';
$string['im:already_in_g'] = 'уже в группе {$a}';
$string['im:and_added_g'] = 'и добавлены в группу {$a}';
$string['im:enrolled_ok'] = 'зачислено - {$a}';
$string['im:err_opening_file'] = 'ошибка при открытии файла {$a}';
$string['im:error_add_g_grp'] = 'ошибка при добавлении группы {$a->groupe} в поток {$a->groupe}';
$string['im:error_add_grp'] = 'ошибка при добавлении потока {$a->groupe} в курс {$a->courseid}';
$string['im:error_addg'] = 'ошибка при добавлении группы {$a->groupe} в курс {$a->courseid}';
$string['im:error_adding_u_g'] = 'ошибка добавления в группу {$a}';
$string['im:error_g_unknown'] = 'ошибка: неизвестная группа {$a}';
$string['im:error_in'] = 'Ошибка при зачислении {$a}';
$string['im:error_out'] = 'Ошибка при отчислении {$a}';
$string['im:not_in'] = 'НЕ зачислено - {$a}';
$string['im:opening_file'] = 'Открытие файла: {$a}';
$string['im:stats_i'] = 'зачислено - {$a}';
$string['im:stats_ui'] = 'отчислено - {$a}';
$string['im:unenrolled_ok'] = 'отчислено - {$a}';
$string['im:user_unknown'] = 'неизвестный пользователь {$a} - строка пропущена';
$string['im:using_role'] = 'Зачисление пользователей с ролью: {$a}';
$string['mail_enrolment'] = 'Здравствуйте,
Вы только что зачислили следующий список пользователей на ваш курс «{$a->course}».
Вот отчет об операции:
{$a->report}';
$string['mail_unenrolment'] = 'Здравствуйте,
Вы только что отчислили следующий список пользователей из вашего курса "{$a->course}".
Вот отчет об операции:
{$a->report}';
$string['mailreport'] = 'Отправить мне отчет по эл. почте';
$string['mass_enroll'] = 'Массовое зачисление';
$string['mass_enroll:enrol'] = 'Зачислить пользователей на курс при помощи файла CSV';
$string['mass_enroll:unenrol'] = 'Отчислить пользователей с курса при помощи  файла CSV';
$string['mass_enroll_help'] = '<h1>Массовое зачисление</h1>

<p>
С помощью этого дополнения вы можете зачислить на курс список существующих пользователей из файла, один аккаунт на строку
</p>
<p>
<b> Первая строка</b>, пустые строки или несуществующие аккаунты будут пропущены. </p>

<p>
Файл может содержать 1 или 2 столбца, разделенные запятой, точкой с запятой или табуляцией.

Вы должны подготовить файл в привычной вам программе для работы с таблицами, используя, например, официальные списки студентов, и при необходимости добавить столбец с группами, в которые вы хотите зачислить пользователей.
Потом экспортируйте файл в формате CSV. (*)</p>

<p>
<b> Первый столбец должен содержать уникальный идентификатор аккаунта</b>: idnumber - ID номер (по умолчанию), login - логин или email - эл.почту нужного пользователя. (**). </p>

<p>
Второй столбец, <b>если есть,</b> содержит название группы, в которую вы хотите добавить пользователя.</p>

<p>
Если группы с таким именем не существует, то она будет создана в вашем курсе, вместе с потоком с тем же именем, к которому эта группа будет добавлена.
.<br/>
Это связано с тем, что элементы курса в Moodle могут быть ограничены потоками (группами из групп), а не группами, так что это может облегчить вашу жизнь. (для этого требуется, чтобы потоки были разрешены администратором вашего сайта).

<p>
В одном и том же файле вы можете использовать различные группы или не использовать группы вообще для некоторых пользователей.
</p>

<p>
Вы можете отключить опцию создания групп и потоков, если вы уверены, что они уже существуют в курсе.
</p>

<p>
По умолчанию пользователи будут зачислены с ролью студента, но вы можете выбрать другие роли, которыми вам разрешено управлять (преподаватель, ассистент или другие пользовательские роли)
</p>

<p>
По желанию вы можете безопасно повторить эту операцию, например, если вы забыли вписать группу или ошиблись с названием.
</p>


<h2> Примеры файлов </h2>

ID номера пользователей и имя группы, которая будет создана в курсе при необходимости (*)
<pre>
"idnumber";"group"
" 2513110";" 4GEN"
" 2512334";" 4GEN"
" 2314149";" 4GEN"
" 2514854";" 4GEN"
" 2734431";" 4GEN"
" 2514934";" 4GEN"
" 2631955";" 4GEN"
" 2512459";" 4GEN"
" 2510841";" 4GEN"
</pre>

только номера ID (**)
<pre>
idnumber
2513110
2512334
2314149
2514854
2734431
2514934
2631955
</pre>

только email (**)
<pre>
email
toto@insa-lyon.fr
titi@]insa-lyon.fr
tutu@insa-lyon.fr
</pre>

логины и группы, разделенные табуляцией:

<pre>
username	 group
ppollet      groupe_de_test              будет в этой группе
codet        groupe_de_test              в той же
astorck      autre_groupe                будет в другой группе
yjayet                                   будет без группы
                                         пустая строка будет пропущена
unknown                                  несуществующий аккаунт будет пропущен
</pre>

<p>
<span <font color=\'red\'>(*) </font></span>: двойные кавычки и пробелы, добавленные в некоторых программах, будут удалены.
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: целевой аккаунт должен существовать в Moodle ; обычно это так, если Moodle синхронизируется с каким-либо внешним источником (LDAP...)
</p>';
$string['mass_enroll_info'] = '<p>
С помощью этого дополнения вы можете зачислить на курс список существующих пользователей из файла, один аккаунт на строку
</p>
<p>
<b> Первая строка</b>, пустые строки или несуществующие аккаунты будут пропущены. </p>
<p>
Файл может содержать несколько столбцов, разделенных запятой, точкой с запятой или табуляцией.
<br/>
<b>Первый столбец должен содержать уникальный идентификатор аккаунта</b>:  idnumber - ID номер (по умолчанию), login - логин или email - эл.почту нужного пользователя. <br/>

Второй столбец, <b>если есть,</b> содержит название группы, в которую вы хотите добавить пользователя.<br/>

По желанию вы можете безопасно повторить эту операцию, например, если вы забыли вписать группу для некоторых пользователей.
</p>';
$string['mass_unenroll'] = 'Массовое отчисление';
$string['mass_unenroll_help'] = '<h1>Массовое отчисление</h1>

<p>
С помощью этого дополнения вы можете отчислить из курса список пользователей из файла, один аккаунт на строку
</p>
<p>
<b> Первая строка</b>, пустые строки или несуществующие аккаунты будут пропущены. </p>

<p>
Файл может содержать несколько столбцов, разделенных запятой, точкой с запятой или табуляцией.

Вы должны подготовить файл в привычной вам программе для работы с таблицами, используя, например, официальные списки студентов, или экспорт журнала оценок курса в CSV, или тот же файл, который был использован для массового зачисления пользователей. (*)</p>

<p>
<b> Первый столбец должен содержать уникальный идентификатор аккаунта</b>:  idnumber - ID номер (по умолчанию), login - логин или email - эл.почту нужного пользователя.(**). </p>

<p>
Все другие столбцы будут проигнорированы. </p>


<p>
По желанию вы можете безопасно повторить эту операцию, например, если вы забыли отчислить некоторых пользователей.
</p>


<p>
<span <font color=\'red\'>(*) </font></span>: двойные кавычки и пробелы, добавленные в некоторых программах, будут удалены.
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: целевой аккаунт должен существовать в Moodle и быть зачислен на курс.
</p>';
$string['mass_unenroll_info'] = '<p>
С помощью этого дополнения вы можете отчислить из курса пользователей по списку из файла, один аккаунт на строку
</p>
<p>
<b> Первая строка</b>, пустые строки или несуществующие аккаунты будут пропущены. </p>
<p>
Файл может содержать несколько столбцов, разделенных запятой, точкой с запятой или табуляцией.
<br/>
<b>Первый столбец должен содержать уникальный идентификатор аккаунта</b>: idnumber - ID номер (по умолчанию), login - логин или email - эл.почту нужного пользователя. <br/>

Другие столбцы будут проигнорированы. Поэтому файл может быть таким же, как файл, использующийся для массового зачисления пользователей на этот курс<br/>

По желанию вы можете безопасно повторить эту операцию, например, если вы забыли отчислить некоторых пользователей.
</p>';
$string['massenrollsettings'] = 'Настройки массового зачисления';
$string['pluginname'] = 'Массовое зачисление';
$string['roleassign'] = 'Назначаемая роль';
$string['unenroll'] = 'Отчислить их из моего курса';
$string['username'] = 'Логин';