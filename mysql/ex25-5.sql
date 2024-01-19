USE EMPLOYEES;
SELECT  title as titres, count(*) as nombre_employé
FROM employees
INNER JOIN titles on employees.emp_no=titles.emp_no
group by title ;

USE EMPLOYEES;
SELECT  title as titres, count(*) as nombre_employé
FROM employees
         INNER JOIN titles on employees.emp_no=titles.emp_no
group by title
ORDER BY nombre_employé DESC;
/* titre le plus courant*/
SELECT t.title, COUNT(*) AS NB_Of_Employees
FROM employees  as e
INNER JOIN titles as t on e.emp_no=t.emp_no
group by t.title
order by NB_Of_Employees DESC
limit 1;
/*titre le moins couant*/
SELECT t.title, COUNT(*) AS NB_Of_Employees
FROM employees  as e
         INNER JOIN titles as t on e.emp_no=t.emp_no
group by t.title
order by NB_Of_Employees ASC
limit 1 ;


SELECT avg(salary), titles.title
from salaries
inner join employees on salaries.emp_no =employees.emp_no
inner join titles on employees.emp_no=titles.emp_no
GROUP BY titles.title;

SELECT avg(salary) as salaire_moyen
FROM salaries;

SELECT last_name as nom_famille, first_name as prenom, salary as salaire
from employees
inner join salaries on employees.emp_no=salaries.emp_no
order by salaire desc
LIMIT 1;

SELECT last_name as nom_famille, first_name as prenom, salary as salaire
from employees
         inner join salaries on employees.emp_no=salaries.emp_no
order by salaire asc
    LIMIT 1;
