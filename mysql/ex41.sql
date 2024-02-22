Use employees;
DELIMITER $$ -- je permet d'utiliser le; dans ma fonctioon sans qu'il y ait un d'impact dans ma requêtee
DROP FUNCTION IF EXISTS anciennete_employe;  -- si fonction existe déjà supprimer fonction
create function anciennete_employe(emp_id int) Returns int -- création de la fonction ancienneeté employé avec comme paramètres entier emp_id
begin  -- début fonction
return (select year(curdate())-year(hire_date) from employees where emp_no = emp_id);
-- je retourne un select année en cours- année d'engagement de la table employé où mon paramètre emp_id est égal à emp_no
end; --fin fonction
$$
Delimiter ;  --fin utilisatioon ; dans la fonction


SELECT *, anciennete_employe(emp_no) AS anciennete -- je selectionne tous les champs, j'appelle ma fonction  avec comme param. emp_no de la table employes
FROM employees
WHERE emp_no IN(10614,10444,10001,10562, 10006);-- où il y a ces chiffress dans emp_no