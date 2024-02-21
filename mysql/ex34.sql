USE employees;
create view employees_info as
select first_name as nom_famille, last_name as prenom, birth_date as date_naissance, gender as genre,  hire_date as date_engagement, employees.emp_no as numero_employé, dept_name as nom_deparetement, title as titre, salary as salaire
 from employees
 inner join titles on employees.emp_no=titles.emp_no
 inner join salaries on employees.emp_no=salaries.emp_no
 inner join dept_emp on employees.emp_no=dept_emp.emp_no
 inner join departments on dept_emp.dept_no=departments.dept_no;