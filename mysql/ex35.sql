Use Employees ;
 create view inactive_employees as
SELECT e.* , dept_name as nom_departement, to_date as unemployed_date
from employees e
inner join dept_emp de
on e.emp_no=de.emp_no
inner join departments d on de.dept_no=d.dept_no
where to_date < curdate();

