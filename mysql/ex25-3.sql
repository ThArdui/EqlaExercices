Use Employees ;
    SELECT first_name, last_name, gender, hire_date
    from employees
    limit 3;

Use Employees;
    SELECT first_name, last_name, gender, hire_date, title
    FROM employees
    INNER JOIN titles on employees.emp_no=titles.emp_no
    limit 3 ;
/***
  select * from employees where emp_no=10500;
 */
 USE Employees;
     SELECT first_name, last_name, gender, hire_date,salary, from_date, to_date
     FROM Employees
     INNER JOIN salaries on employees.emp_no=salaries.emp_no
     where employees.emp_no=10500
order by from_date;