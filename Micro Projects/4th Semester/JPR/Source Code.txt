import java.util.*; // For creating object of Scanner Class

class Employee
{
    // instance variables
    int empid,age;   
    String name, designation; 
    float salary;
    long contact_no = 0;
  
    void getdata()   // method to get employee details from user
    {
        Scanner s = new Scanner(System.in);

        System.out.println("-----Enter Details of Employee-----");
        
        // input employee ID
        System.out.print("\nEnter Employee ID: ");
        empid = s.nextInt();   

        // input employee name
        System.out.print("\nEnter Name: ");
        s.nextLine();  // consume the newline character from the previous input
        name = s.nextLine();
        
        // input employee salary
        System.out.print("\nEnter Salary: ");
        salary = s.nextFloat();
        
        // input employee designation
        System.out.print("\nEnter Designation: ");
        designation = s.nextLine();
        
        // input employee age with validation
        System.out.print("\nEnter Age: ");
        age = s.nextInt();
        if(age<0) // check if age is less than zero, if yes then prompt user to enter a valid age
        {
            
                System.out.print("Enter a valid age:");
                age=s.nextInt();
            
        } 
       
        // input employee contact number
        System.out.print("\nEnter Contact Number: ");
        contact_no = s.nextLong();
        // check if contact number is 10 digit long, if not prompt user to enter a valid number
        while(String.valueOf(contact_no).length() != 10)
          {  
            System.out.print("\nContact number should be of 10 digits \nEnter a valid Number:");
            contact_no = s.nextLong();
          }
        
        System.out.println("**************************************");
    }

    // method to search an employee by their id
    void search(Employee e[], int n, int ei)
     {
        int flag = 0;
    
        for (int i = 0; i < n; i++) 
        {
            if (ei == e[i].empid) 
            {
                flag = 1;
    
                String format = "| %-10s | %-20s | %-15s | %-20s | %-5s | %-15s |\n";
                // display the details of the employee in a formatted table
                System.out.println("________________________________________________________________________________________________________");
                System.out.format(format, "Empid", "Name", "Salary", "Designation", "Age", "Contact_no");
                System.out.println("________________________________________________________________________________________________________");       
                System.out.format(format, e[i].empid, e[i].name, e[i].salary, e[i].designation, e[i].age, e[i].contact_no);
                System.out.println("________________________________________________________________________________________________________");
                
                break;
            }
        }
    
        if (flag == 0) 
        {
            // if employee not found with the given ID, display a message
            System.out.println("Employee Not Found");
        }
    }
    
      // method to update an employee by their id
     void update(Employee e[], int n) 
    {
        int eID, flag = 0, a;
        float sal;
        String desg;
        long con;

        Scanner s = new Scanner(System.in);
        // input employee id to update
        System.out.println("Enter Employee's ID to Update:");
        eID = s.nextInt();

        System.out.println("\n<<What you want to update>>");
        System.out.print("\n1.EMPLOYEE'S SALARY \n2.EMPLOYEE'S AGE \n3.EMPLOYEE'S CONTACT NO \n4.EMPLOYEE'S DESIGNATION");
        System.out.print("\nEnter Your Choice:");
        int N = s.nextInt();
  
        // loop through the array of employees to find the employee with the given ID
        for(int i=0;i<n;i++)
        {
            if(eID==e[i].empid)
            {    
            for (  i = 0; i < n; i++) 
                 {
                      if (eID == e[i].empid) // if employee id matched 
                         {
                             switch (N) 
                             {
                                 case 1: // update employee salary
                                     System.out.print("\nEnter salary to update:");
                                     sal = s.nextFloat();
                                 for (int j = 0; j < n; j++) 
                                  {
                                        if (eID == e[j].empid) 
                                         {
                                             e[j].salary = sal;
                                             flag = 1;
                                         }
                                  }
                                 break;
                          
                                 case 2:  // update employee age
                                 System.out.print("\nEnter AGE to Update:");
                                 a = s.nextInt();
                                 for (int j = 0; j < n; j++) 
                                 {
                                     if (eID == e[j].empid) 
                                     {
                                         e[j].age = a;
                                         flag = 1;
                                     }
                                 }
                                 break;
          
                                 case 3: // update employee contact number
                                 System.out.print("\nEnter Contact you want to update:");
                                 con = s.nextLong();
                                // check if contact number is 10 digit long, if ot prompt user to enter a valid number
                                 if (String.valueOf(con).length() != 10) 
                                 {
                                     System.out.println("Contact number should be of 10 digits");
                                 }   
                                 else 
                                 {
                                     for (int j = 0; j < n; j++) 
                                     {
                                         if (eID == e[j].empid) 
                                         {
                                             e[j].contact_no = con;
                                             flag = 1;
                                         }
                                     }
                                 }
                                 break;
                             
                             case 4:  // update employee designation
                                 System.out.print("\nEnter Designation to Update:");
                                 desg = s.next();
                                     for (int j = 0; j < n; j++) 
                                     {
                                         if (eID == e[j].empid) 
                                         {
                                             e[j].designation = desg;
                                             flag = 1;
                                         }
                                     }
                                  break;
                       
                                  default:
                                    System.out.println("Invalid choice!");
                                 break;
                     }
                  }
                 }
                } 
                else
                {
                  // if employee not found with the given id, display message
                  System.out.println("\nEmployee Not Found");
                  break;
                }
            }
        if (flag == 1) 
        {
            // if employee record updated, display message
            System.out.println("\nInformation Updated");
        } 
        else 
        {
            // if employee record not updated, display message
            System.out.println("\nInformation Not Updated");
        }
    }

   // method to display employee details in table format
    void display() 
    {
        String format = "| %-10s | %-20s | %-15s | %-20s | %-5s | %-15s |\n";
        
        System.out.format(format, empid, name, salary, designation, age, contact_no);
        System.out.println("________________________________________________________________________________________________________");
    }
    
     //method to delete employee details with entered employee id
    int delete(Employee e[], int n) 
    {
        Scanner s = new Scanner(System.in);
        
       //  Prompt the user to enter the ID of the employee to be deleted
        System.out.println("Enter Employee ID to Delete:");
        int empID = s.nextInt();
       
        //Initialize a variable to store the index of the employee to be deleted
        int index = -1;
       
         //Loop through the array of employees to find the index of the employee to be deleted
        for (int i = 0; i < n; i++) 
        {
            if (empID == e[i].empid) 
            {
                 // Store the index of the employee to be deleted
                index = i;
                break;
            }
        }
    
        // If Employee id found to be delete
        if (index != -1) 
        {
            // If the employee was found, shift all elements after the deleted employee by one position to the left
            for (int i = index; i < n - 1; i++) 
            {
                e[i].empid = e[i+1].empid;
                e[i].name= e[i+1].name;
                e[i].designation= e[i+1].designation;
                e[i].age= e[i+1].age;
                e[i].contact_no= e[i+1].contact_no;
                e[i].salary= e[i+1].salary;
            }
            
            // Decrease the number of employees by one and inform the user that the employee was successfully deleted
            System.out.println("Employee with ID " + empID + " has been deleted.");
            return --n;
        } 
        else 
        {
            // If the employee was not found, inform the user and return the current number of employees
            System.out.println("Employee Not Found");
            return n;
        }
    }
    
    // This is the main method of the program
    public static void main(String args[])
    {
        // Loop to create and initialize the array of Employee objects
       while(true)
      {   
        // Create a scanner object to read input from the user
        Scanner s = new Scanner(System.in);

        // Initialize variables
        int n = 0; // Number of employees
        int ch; // Menu choice

        // Prompt the user to enter the number of employees to create
        System.out.print("\nEnter Number of Records to Create:");
        n=s.nextInt();
    
        // Create the array of Employee objects
        Employee e[] = new Employee[n];

        // Initialize each Employee object in the array
        for(int i=0;i<n;i++)
        {
            e[i] = new Employee();
        }

        // Display the menu and prompt the user to choose an option
        while(true)
        {
          
          
            System.out.println("\n\n*****<<<<<MENU>>>>>*****");
			System.out.println("1 : ACCEPT THE EMPLOYEE INFORMATIOON");
			System.out.println("2 : DISPLAY THE EMPLOYEE INFORMATION");
			System.out.println("3 : SEARCH THE EMPLOYEE INFORMATION");
			System.out.println("4 : UPDATE THE EMPLOYEE INFORMATION");
            System.out.println("5 : DELETE");
			System.out.println("6 : EXIT");
			
            System.out.print("Enter your choice:");
            ch = s.nextInt(); // Read the user's choice

            switch(ch) // Execute the appropriate option based on the user's choice
            {
                case 1: // Accept the employee information from the user
                        for(int i=0;i<n;i++)
                          e[i].getdata();
                        break;
                
                case 2: // Display the employee information
                String format = "| %-10s | %-20s | %-15s | %-20s | %-5s | %-15s |\n";
                System.out.println("________________________________________________________________________________________________________");
                System.out.format(format, "Empid", "Name", "Salary", "Designation", "Age", "Contact_no");
                System.out.println("________________________________________________________________________________________________________");
                    for(int i=0;i<n;i++)
                       e[i].display();
                     break;
                    
                case 3:  // Search for an employee by ID
                        System.out.println("Enter Employee id to search:");
                        int ei = s.nextInt();
                        for(int i=0;i<n;i++)
                        {
                            e[i].search(e, n, ei);
                            break;
                        }
                        break;

                case 4: // Update an employee's information
                        System.out.println("<<<<UPDATE THE DATA>>>>");
                        e[0].update(e,n);
                        break;
                
                case 5: // Delete an employee's information
                        n= e[0].delete(e, n);
                        break;

                case 6:System.exit(0); // Exit the program
            }
        }
      }   
    }
}