USE Employees ;
SELECT  first_name as nom_famille, last_name as prenom,dept_name as nom_du_departement, from_date as debut_fonction, to_date as fin_fonction
FROM employees
INNER JOIN dept_manager on employees.emp_no=dept_manager.emp_no
INNER JOIN departments on dept_manager.dept_no=departments.dept_no;

USE Employees;
SELECT  first_name as nom_famille, last_name as prenom, title as titre
FROM employees
INNER JOIN titles on employees.emp_no=titles.emp_no
WHERE title="Manager";

USE Employees;
SELECT first_name as nom_famille, last_name as prenom, dept_name as nom_departement
FROM employees
INNER JOIN dept_emp on employees.emp_no=dept_emp.emp_no
INNER JOIN departments on dept_emp.dept_no=departments.dept_no
limit 10;

USE Employees;
SELECT first_name as nom_famille, last_name as prenom, dept_name as nom_departement
FROM employees
         INNER JOIN dept_emp on employees.emp_no=dept_emp.emp_no
         INNER JOIN departments on dept_emp.dept_no=departments.dept_no
         where dept_name="Finance"
    limit 10;

USE Employees ;
    SELECT first_name as nom_famille, last_name as prenom,  title as titre
    FROM employees
    INNER JOIN titles on employees.emp_no=titles.emp_no
    where title="manager" limit 10;

USE Employees;
    SELECT first_name as nom_famille_employe, last_name as prenom_employe,dept_name as nom_departement
    FROM  employees
    INNER JOIN  dept_manager ON employees.emp_no=dept_manager.emp_no
    INNER JOIN departments ON dept_manager.dept_no=departments.dept_no
 WHERE dept_name='Finance';