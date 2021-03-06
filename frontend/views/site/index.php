<?php
/**
 * Created with live in Kodelnaya.
 * Author: Dudarev Ilia
 * Email: ilya@kodelnya.ru
 * Phone: +7 906 780 3210
 * Date: 23.03.2017
 * Time: 14:53
 */
?>
<h1 class="text-center">Задание</h1>
<h2 class="text-center">на выполнение курсовой работы</h2>
<h3 class="text-center">под дисциплине "Базы данных"</h3>
<ol>
    <li><b>Тема:</b> Разработка клиент-серверного приложения по организации НИРС на кафедре</li>
    <li><b>Исходные данные:</b> Ведение БД по студентам, руководителям, темам научных работ, финансированию тем и отчеты
        (публикации в сборниках), доклады на конференциях и т.п.
    </li>
    <li><b>Перечень вопросов, подлежащих разработке, и обязательного графического материала:</b>
        <p>Разработать клиент-серверное приложение, серверная часть которой реализована на MS SQL Server (или Oracle),
            представляющая собой модель предметной области в соответствии с вариантом задания. В рамках заданной
            предметной области реализовать заданную (по варианту) схему отношений, т.е. выделить сущности и их атрибуты,
            так чтобы связи между сущностями соответствовали представленной схеме. В рамках курсовой работы необходимо
            на стороне сервера реализовать и использовать при демонстрации приложения следующие компоненты:</p>
        <ol>
            <li>Постоянные таблицы и связи между ними, количество таблиц и наличие связей должно соответствовать
                заданию, допускается увеличение числа таблиц и их полей для более адекватного представления предметной
                области;
            </li>
            <li>В приложении реализовать не менее пяти запросов, включая (для демонстрации навыков работы)
                <ul>
                    <li>Составной многотабличный запрос с параметром, включающий соединение таблиц и CASE-выражение;
                    </li>
                    <li>На основе обновляющего представления (многотабличного VIEW), в котором критерий упорядоченности
                        задает пользователь при выполнении;
                    </li>
                    <li>Запрос, содержащий коррелированные и некоррелированные подзапросы в разделах SELECT, FROM и
                        WHERE (в каждом хотя бы по одному);
                    </li>
                    <li>Многотабличный запрос, содержащий группировку записей, агрегативные функции и параметр,
                        используемый в разделе HAVING;
                    </li>
                    <li>Запрос, содержащий предикат ANY, SOME или ALL;</li>
                </ul>
            </li>
            <li>Создать необходимые кластерные (по первичным ключам) и не кластерные индексы для увеличения скорости
                выполнения запросов;
            </li>
            <li>В таблице (в соответствии с вариантом) предусмотреть поле, которое заполняется автоматически по
                срабатыванию триггера при добавлении, обновлении и удалении данных, иметь возможность
                продемонстрировать работу триггера при работе приложения. Триггера должны обрабатывать только те
                записи, которые были добавлены, изменены или удалены в ходе текущей операции (транзакции).
            </li>
            <li>Операции добавления, удаления и обновления реализовать в виде хранимых процедур (с параметрами) хотя бы
                для одной таблицы; для остальных допустимо использовать возможности связывания полей ввода в приложении
                с полями БД;
            </li>
            <li>Реализовать отдельную хранимую процедуру, состоящую из нескольких отдельных операций в виде единой
                транзакции, которая при определенных условиях может быть зафиксирована или откатана;
            </li>
            <li>В триггере или хранимой процедуре реализовать курсор на обновления отдельных данных;</li>
            <li>В запросе (из пункта 2 или в дополнительном к тому перечню) использовать собственную скалярную функцию,
                а в хранимой процедуре – векторную (или табличную) функцию. Функции сохранить в базе данных
            </li>
            <li>Распределение прав пользователей: предусмотреть не менее двух пользователей с разным набором привилегий.
                Каждый набор привилегий оформить в виде роли.
            </li>
        </ol>
    </li>
</ol>
<p>Клиент должен обеспечивать добавление, модификацию и удаление данных по всей предметной области. Добавление,
    редактирование данных хотя бы по одной таблице производить в отдельном окне.</p>
<p>Запрещено в качестве вводимых данных, в том числе для связи таблиц, указывать значения первичных и внешних ключей –
    для обеспечения ссылочной целостности пользователь должен выбирать значения из справочника, а соответствующие
    значения должны подставляться программно (тем или иным способом – автоматически).</p>
<p>Ограничение на выбор средства реализации (языка программирования) клиента отсутствуют.</p>

