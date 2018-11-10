# Схема таблиц базы данных для проведения тестирования

## Test

1. id (PK, integer);
2. name (string 50, required, unique);
3. is_visible (bool[false], required);
4. type (enum['standard', 'selection k of n'], required);
5. approve (bool[false], required);
6. random_select (bool[false], required);

## Question

1. id (PK, integer);
2. title (string 100, required);
3. descriptrion (text, required);
4. answers (FK->*Answers{question_id}*, required);
5. type (enum['single', 'multiple', 'its response', 'drop-down menu'], required);
6. order (integer);
7. group (FK->*Group_question*);

## Group_question

1. id (PK, integer);
2. name (string 50, required, unique);

## Answers

1. id (PK, integer);
2. question_id (FK->*Question*, required);
3. answer (text, required);
4. true (bool[false]);

## User_answer

1. id (PK, integer);
2. question_id (FK->*Question*, required);
3. answer (text, required);

## Point_for_test

1. id (PK, integer);
2. user_id (FK->*User*, required);
3. test_id(FK->*Test*, required);
4. mark (integer, required);
5. percent_true (integer, required);
6. percent_false (integer, required);