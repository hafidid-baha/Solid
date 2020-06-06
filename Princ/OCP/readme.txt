Open Close Principle (hhis is the most important principle of oop programming)

Classes and Modules Should Be Open for extenstion, but closed for modifacation
what's means that anny new functionality should be implemented by creating new classes
and entiies instead of moddfy aleady exists classes and object

whene the app requirement are changed you should create new classes and extends the base 
classe instead of changing the base classe

exemple 

+ lets see that we have an employee classe with the next:
    + fullname :string
    + email :string
    + tel :string
    + salary :double
    + getEmpBonus()

here we have the getEmpBonus() calculate and return the emp bonus by using some
mathumatical login

but after some time a client needs a system upgrade he told us he need to have more than
type of employee and each type uses a deferent mathimatic formula to calculate his 
bonus

so we already a have a base classe that contain all the information about the employee
according to ocp principle we should not change the getEmpBonus() function inside the employee
classe instead we can create create a class for each employee type and overide 
getEmpBonus() function to match the requirement of new employeeType 


    

