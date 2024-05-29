import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.JTableHeader;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

class EmployeeManagementSystem {
    EmployeeManagementSystem() {
        JFrame home = new JFrame("Employee Management System");
        home.setSize(1920, 1080);
        home.setLayout(null);

        JLabel title = new JLabel("Welcome to Employee Management System");
        JButton add_emp = new JButton("Add Employee Details");
        JButton view_emp = new JButton("View Employee Details");
        JButton edit_emp = new JButton("Edit Employee Details");
        JButton search_emp = new JButton("Search Employee");
        JButton exit = new JButton("Exit");

        title.setBounds(425, 50, 700, 100);
        add_emp.setBounds(600, 150, 300, 75);
        view_emp.setBounds(600, 250, 300, 75);
        edit_emp.setBounds(600, 350, 300, 75);
        search_emp.setBounds(600, 450, 300, 75);
        exit.setBounds(600, 550, 300, 75);

        add_emp.setFocusPainted(false);
        view_emp.setFocusPainted(false);
        edit_emp.setFocusPainted(false);
        search_emp.setFocusPainted(false);
        exit.setFocusPainted(false);

        title.setFont(new Font("Times New Roman", Font.BOLD, 35));
        add_emp.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        view_emp.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        edit_emp.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        search_emp.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        exit.setFont(new Font("Times New Roman", Font.PLAIN, 22));

        exit.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });

        home.add(title);

        home.add(add_emp);
        home.add(view_emp);
        home.add(edit_emp);
        home.add(search_emp);
        home.add(exit);

        add_emp.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                home.dispose();

                JFrame emp_add = new JFrame("Employee Management System - Add Employee");
                emp_add.setSize(1920, 1080);
                emp_add.setLayout(null);

                JLabel id = new JLabel("Enter Emp ID:");
                JTextField id_ip = new JTextField();
                JLabel id_er = new JLabel();

                JLabel name = new JLabel("Enter Name:");
                JTextField name_ip = new JTextField();
                JLabel name_er = new JLabel();

                JLabel phone = new JLabel("Enter Phone Number:");
                JTextField phone_ip = new JTextField();
                JLabel phone_er = new JLabel();

                JLabel email = new JLabel("Enter Email Address:");
                JTextField email_ip = new JTextField(30);
                JLabel email_er = new JLabel();

                JLabel age = new JLabel("Enter Age:");
                JTextField age_ip = new JTextField();
                JLabel age_er = new JLabel();

                JLabel gender = new JLabel("Select Gender:");
                JComboBox genderval = new JComboBox();
                genderval.addItem("- Select -");
                genderval.addItem("Male");
                genderval.addItem("Female");
                genderval.setFocusable(false);
                JLabel gender_er = new JLabel();

                JLabel desi = new JLabel("Enter Designation:");
                JTextField desi_ip = new JTextField();
                JLabel desi_er = new JLabel();

                JLabel sal = new JLabel("Enter Salary (Rs):");
                JTextField sal_ip = new JTextField();
                JLabel sal_er = new JLabel();

                JButton back = new JButton("Back");
                JButton submit = new JButton("Submit");

                id.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                id_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                id_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                name.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                name_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                name_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                phone.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                phone_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                phone_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                email.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                email_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                email_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                age.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                age_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                age_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                gender.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                genderval.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                gender_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                desi.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                desi_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                desi_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                sal.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                sal_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                sal_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));

                back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                id.setBounds(100, 50, 260, 50);
                id_ip.setBounds(350, 50, 260, 50);
                id_er.setBounds(350, 95, 260, 30);

                name.setBounds(100, 125, 260, 50);
                name_ip.setBounds(350, 125, 260, 50);
                name_er.setBounds(350, 165, 260, 30);

                phone.setBounds(100, 200, 260, 50);
                phone_ip.setBounds(350, 200, 260, 50);
                phone_er.setBounds(350, 240, 260, 30);

                email.setBounds(100, 275, 260, 50);
                email_ip.setBounds(350, 275, 260, 50);
                email_er.setBounds(350, 315, 260, 30);

                age.setBounds(100, 350, 260, 50);
                age_ip.setBounds(350, 350, 260, 50);
                age_er.setBounds(350, 390, 260, 30);

                gender.setBounds(100, 425, 260, 50);
                genderval.setBounds(350, 425, 260, 50);
                gender_er.setBounds(350, 465, 260, 30);

                desi.setBounds(100, 500, 260, 50);
                desi_ip.setBounds(350, 500, 260, 50);
                desi_er.setBounds(350, 540, 260, 30);

                sal.setBounds(100, 575, 260, 50);
                sal_ip.setBounds(350, 575, 260, 50);
                sal_er.setBounds(350, 615, 260, 30);

                back.setBounds(100, 700, 250, 50);
                submit.setBounds(400, 700, 250, 50);

                id_er.setForeground(Color.red);
                name_er.setForeground(Color.red);
                phone_er.setForeground(Color.red);
                email_er.setForeground(Color.red);
                age_er.setForeground(Color.red);
                gender_er.setForeground(Color.red);
                desi_er.setForeground(Color.red);
                sal_er.setForeground(Color.red);

                back.setFocusPainted(false);
                submit.setFocusPainted(false);

                emp_add.add(id);
                emp_add.add(id_ip);
                emp_add.add(id_er);
                emp_add.add(name);
                emp_add.add(name_ip);
                emp_add.add(name_er);
                emp_add.add(phone);
                emp_add.add(phone_ip);
                emp_add.add(phone_er);
                emp_add.add(email);
                emp_add.add(email_ip);
                emp_add.add(email_er);
                emp_add.add(age);
                emp_add.add(age_ip);
                emp_add.add(age_er);
                emp_add.add(gender);
                emp_add.add(genderval);
                emp_add.add(gender_er);
                emp_add.add(desi);
                emp_add.add(desi_ip);
                emp_add.add(desi_er);
                emp_add.add(sal);
                emp_add.add(sal_ip);
                emp_add.add(sal_er);
                emp_add.add(back);
                emp_add.add(submit);

                back.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {

                        emp_add.dispose();
                        home.setVisible(true);
                    }
                });

                submit.addActionListener(new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        boolean name_bool = false, phone_bool = false, email_bool = false, age_bool = false,
                                gender_bool = false, desi_bool = false, sal_bool = false;
                        // int id_val = Integer.parseInt(id_ip.getText());
                        String name_val = name_ip.getText();
                        String phone_val = phone_ip.getText();
                        String email_val = email_ip.getText();
                        int age_val = Integer.parseInt(age_ip.getText());
                        String gender_val = (String) genderval.getSelectedItem();
                        String desi_val = desi_ip.getText();
                        String sal_val = sal_ip.getText();
                        long sal_long = Long.parseLong(sal_ip.getText());

                        for (int i = 0; i < name_val.length(); i++) {
                            char ch = name_val.charAt(i);
                            if (ch < 'a' && ch > 'z' || ch >= 'A' && ch <= 'Z') {
                                name_er.setText("Enter Name in Alphabet");
                                name_bool = false;

                            } else if (!(ch < '0' || ch > '9')) {
                                name_er.setText("Enter Name in Alphabet");
                                name_bool = false;
                            } else {
                                name_er.setText("");
                                name_bool = true;
                            }
                        }

                        for (int i = 0; i < phone_val.length(); i++) {
                            char ch = phone_val.charAt(i);
                            if (phone_val.length() != 10) {
                                phone_er.setText("Enter a valid phone number (10 Digits)");
                                phone_bool = false;
                            } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                phone_er.setText("Enter a valid phone number (10 Digits)");
                                phone_bool = false;
                            } else {
                                phone_er.setText("");
                                phone_bool = true;
                            }
                        }

                        int atIndex, dotIndex;
                        atIndex = email_val.indexOf('@');
                        dotIndex = email_val.indexOf('.');
                        if (atIndex <= 0 || dotIndex <= atIndex || dotIndex == email_val.length() - 1) {
                            email_er.setText("Email should contain '@' and '.' ");
                            email_bool = false;
                        } else {
                            email_er.setText("");
                            email_bool = true;
                        }

                        if (age_val < 18) {
                            age_er.setText("Enter a valid age (above 18)");
                            age_bool = false;
                        } else {
                            age_er.setText("");
                            age_bool = true;
                        }

                        if ("- Select -".equals(gender_val)) {
                            gender_er.setText("Please Select Your Gender");
                            gender_bool = false;
                        } else {
                            gender_er.setText("");
                            gender_bool = true;
                        }

                        if (desi_val.isEmpty()) {
                            desi_er.setText("Enter Designation");
                            desi_bool = false;
                        } else {
                            for (int i = 0; i < desi_val.length(); i++) {
                                char ch = desi_val.charAt(i);
                                if (!(ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z')) {
                                    desi_er.setText("Enter Designation in Alphabet");
                                    desi_bool = false;
                                } else {
                                    desi_er.setText("");
                                    desi_bool = true;
                                }
                            }
                        }

                        for (int i = 0; i < sal_val.length(); i++) {
                            char ch = sal_val.charAt(i);
                            if (ch < '0' || ch > '9') {
                                sal_er.setText("Enter Salary in Numbers");
                                sal_bool = false;
                            } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                sal_er.setText("Enter Salary in Numbers");
                                sal_bool = false;
                            } else {
                                sal_er.setText("");
                                sal_bool = true;
                            }
                        }

                        if (sal_long < 0) {
                            sal_er.setText("Salary cannot be a negative number");
                            sal_bool = false;
                        } else {
                            sal_er.setText("");
                            sal_bool = true;
                        }

                        if (name_bool && phone_bool && email_bool && age_bool && desi_bool && gender_bool
                                && sal_bool == true) {
                            JFrame pb = new JFrame("Saving Employee Data.....");
                            pb.setLayout(null);
                            pb.setBounds(600, 350, 330, 125);

                            JProgressBar save = new JProgressBar(0, 100);
                            pb.add(save);
                            save.setStringPainted(true);
                            save.setBounds(50, 30, 220, 30);
                            Timer timer = new Timer(500, new ActionListener() {
                                int progress = 0;

                                public void actionPerformed(ActionEvent e) {
                                    if (progress <= 100) {
                                        save.setValue(progress);
                                        save.setString(progress + "%");
                                        progress += 20; // Simulate progress by incrementing 20% at a time
                                    } else {
                                        ((Timer) e.getSource()).stop();
                                        pb.dispose();
                                        JFrame saved = new JFrame("Success");
                                        saved.setBounds(600, 350, 250, 150);
                                        saved.setLayout(null);
                                        JLabel success_msg = new JLabel("Data Saved Successfully!");
                                        success_msg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        success_msg.setBounds(30, 25, 200, 30);

                                        JButton ok = new JButton("OK");
                                        ok.setFocusPainted(false);
                                        ok.setBounds(80, 60, 70, 30);
                                        ok.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                saved.dispose();
                                                emp_add.dispose();
                                                home.setVisible(true);
                                            }
                                        });
                                        saved.add(success_msg);
                                        saved.add(ok);
                                        saved.setVisible(true);
                                    }
                                }
                            });

                            timer.start(); // Start the timer to update the progress

                            pb.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                            pb.setVisible(true);
                        }
                    }
                });

                emp_add.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                emp_add.setVisible(true);
            }
        });

        view_emp.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                JFrame pb = new JFrame("Fetching Employee Data.....");
                pb.setLayout(null);
                pb.setBounds(600, 350, 330, 125);

                JProgressBar save = new JProgressBar(0, 100);
                pb.add(save);
                save.setStringPainted(true);
                save.setBounds(50, 30, 220, 30);
                Timer timer = new Timer(200, new ActionListener() {
                    int progress = 0;

                    public void actionPerformed(ActionEvent e) {
                        if (progress <= 100) {
                            save.setValue(progress);
                            save.setString(progress + "%");
                            progress += 25; // Simulate progress by incrementing 20% at a time
                        } else {
                            ((Timer) e.getSource()).stop();
                            pb.dispose();
                            home.dispose();

                            JFrame vmain = new JFrame("Employee Management System - View Employee Details");
                            vmain.setSize(1920, 1080);
                            vmain.setLayout(null);

                            // Create column names and data
                            String[] columnNames = { "Emp ID", "Name", "Phone Number", "Email Address", "Age", "Gender",
                                    "Designation", "Salary" };
                            Object[][] data = {
                                    { 1, "Abc", "1234567890", "abc@gmail.com", "18", "Male", "Manager", 1000000 },
                                    { 2, "Dhruv", "8055128556", "adruv@gmail.com", "18", "Male", "CEO", 1500000 },
                                    { 3, "Samarthya", "7249336212", "samu@gmail.com", "19", "Male", "Developer", 800000 },
                                    { 4, "Atharva", "9129215879", "atharva@gmail.com", "18", "Male", "Tester", 800000 },
                                    { 5, "Mohit", "7824692159", "mohit@gmail.com", "18", "Male", "Designer", 750000 }
                            };
                            DefaultTableModel model = new DefaultTableModel(data, columnNames);
                            JTable emp_data = new JTable(model);

                            // Create a JScrollPane and add the JTable to it
                            JScrollPane scrollPane = new JScrollPane(emp_data);
                            scrollPane.setBounds(30, 100, 1300, 500);

                            // Set the font for column headers
                            JTableHeader header = emp_data.getTableHeader();
                            header.setFont(new Font("Times New Roman", Font.BOLD, 20));

                            // Set the font for table cells
                            emp_data.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                            emp_data.setRowHeight(20);

                            // Create a JButton for navigation
                            JButton backbtn = new JButton("Back");
                            backbtn.setBounds(150, 600, 150, 75);
                            backbtn.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                            backbtn.setFocusPainted(false);
                            vmain.add(scrollPane);
                            vmain.add(backbtn);

                            backbtn.addActionListener(new ActionListener() {
                                @Override
                                public void actionPerformed(ActionEvent e) {
                                    vmain.dispose();
                                    home.setVisible(true);
                                }
                            });

                            vmain.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                            vmain.setVisible(true);
                        }
                    }
                });

                timer.start(); // Start the timer to update the progress

                pb.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                pb.setVisible(true);
            }
        });

        edit_emp.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                home.dispose();
                JFrame emain = new JFrame("Employee Management System - Search Employee");
                emain.setSize(1920, 1080);
                emain.setLayout(null);

                JLabel emp_id = new JLabel("Enter Employee ID:");
                JTextField emp_id_ip = new JTextField();

                JButton cancel = new JButton("Back");
                JButton submit = new JButton("Submit");

                emp_id.setFont(new Font("Times New Roman", Font.PLAIN, 35));
                emp_id_ip.setFont(new Font("Times New Roman", Font.PLAIN, 35));
                cancel.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                emp_id.setBounds(400, 200, 300, 75);
                emp_id_ip.setBounds(700, 222, 300, 40);
                cancel.setBounds(400, 320, 200, 50);
                submit.setBounds(800, 320, 200, 50);

                cancel.setFocusPainted(false);
                submit.setFocusPainted(false);

                emain.add(emp_id);
                emain.add(emp_id_ip);
                emain.add(cancel);
                emain.add(submit);

                submit.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        int id_val = Integer.parseInt(emp_id_ip.getText());

                        if (id_val != 10) {
                            emain.dispose();
                            JFrame edit_emp = new JFrame("Employee Management System - Edit Employee Details");
                            edit_emp.setLayout(null);
                            edit_emp.setSize(1920, 1080);

                            JLabel edit_msg = new JLabel("What you want to edit?");
                            edit_msg.setBounds(300, 200, 550, 75);
                            edit_msg.setFont(new Font("Times New Roman", Font.PLAIN, 35));

                            JComboBox choice = new JComboBox();
                            choice.setBounds(650, 215, 300, 50);
                            choice.setFont(new Font("Times New Roman", Font.PLAIN, 35));
                            choice.addItem("Select Field");
                            choice.addItem("Name");
                            choice.addItem("Phone Number");
                            choice.addItem("Email Address");
                            choice.addItem("Age");
                            choice.addItem("Gender");
                            choice.addItem("Designation");
                            choice.addItem("Salary");
                            choice.setFocusable(false);

                            JButton back = new JButton("Back");
                            back.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                            back.setBounds(300, 350, 200, 50);
                            back.setFocusPainted(false);

                            JButton next = new JButton("Next");
                            next.setFocusPainted(false);
                            next.setBounds(750, 350, 200, 50);
                            next.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                            back.addActionListener(new ActionListener() {
                                @Override
                                public void actionPerformed(ActionEvent e) {
                                    edit_emp.dispose();
                                    emain.setVisible(true);
                                }
                            });

                            next.addActionListener(new ActionListener() {
                                @Override
                                public void actionPerformed(ActionEvent e) {
                                    String selected = (String) choice.getSelectedItem();
                                    if (selected == "Name") {
                                        JFrame popup = new JFrame("Edit Name");
                                        JLabel ename = new JLabel("Name:");
                                        ename.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        ename.setBounds(10, 20, 260, 50);
                                        JTextField name_tf = new JTextField();
                                        name_tf.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        name_tf.setBounds(100, 30, 260, 30);
                                        JLabel name_er = new JLabel();
                                        name_er.setBounds(100, 60, 300, 30);
                                        name_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        name_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean name_bool = false;
                                                String name_val = name_tf.getText();
                                                for (int i = 0; i < name_val.length(); i++) {
                                                    char ch = name_val.charAt(i);
                                                    if (ch < 'a' && ch > 'z' || ch >= 'A' && ch <= 'Z') {
                                                        name_er.setText("Enter Name in Alphabet");
                                                        name_bool = false;

                                                    } else if (!(ch < '0' || ch > '9')) {
                                                        name_er.setText("Enter Name in Alphabet");
                                                        name_bool = false;
                                                    } else {
                                                        name_er.setText("");
                                                        name_bool = true;
                                                    }
                                                }
                                                if (name_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);

                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(ename);
                                        popup.add(name_tf);
                                        popup.add(name_er);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else if (selected == "Phone Number") {
                                        JFrame popup = new JFrame("Edit Phone Number");
                                        JLabel ephone = new JLabel("Phone Number:");
                                        ephone.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        ephone.setBounds(10, 20, 260, 50);
                                        JTextField phone_tf = new JTextField();
                                        phone_tf.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        phone_tf.setBounds(150, 30, 230, 30);
                                        JLabel phone_er = new JLabel();
                                        phone_er.setBounds(150, 60, 300, 30);
                                        phone_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        phone_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean phone_bool = false;
                                                String phone_val = phone_tf.getText();
                                                for (int i = 0; i < phone_val.length(); i++) {
                                                    char ch = phone_val.charAt(i);
                                                    if (phone_val.length() != 10) {
                                                        phone_er.setText("Enter a valid phone number (10 Digits)");
                                                        phone_bool = false;
                                                    } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                                        phone_er.setText("Enter a valid phone number (10 Digits)");
                                                        phone_bool = false;
                                                    } else {
                                                        phone_er.setText("");
                                                        phone_bool = true;
                                                    }
                                                }
                                                if (phone_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);
                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(ephone);
                                        popup.add(phone_tf);
                                        popup.add(phone_er);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else if (selected == "Email Address") {
                                        JFrame popup = new JFrame("Edit Email Address");
                                        JLabel eemail = new JLabel("Email:");
                                        eemail.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        eemail.setBounds(10, 20, 260, 50);
                                        JTextField email_tf = new JTextField();
                                        email_tf.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        email_tf.setBounds(100, 30, 260, 30);
                                        JLabel email_er = new JLabel();
                                        email_er.setBounds(100, 60, 300, 30);
                                        email_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        email_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean email_bool = false;
                                                String email_val = email_tf.getText();
                                                int atIndex, dotIndex;
                                                atIndex = email_val.indexOf('@');
                                                dotIndex = email_val.indexOf('.');
                                                if (atIndex <= 0 || dotIndex <= atIndex
                                                        || dotIndex == email_val.length() - 1) {
                                                    email_er.setText("Email should contain '@' and '.' ");
                                                    email_bool = false;
                                                } else {
                                                    email_er.setText("");
                                                    email_bool = true;
                                                }
                                                if (email_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);
                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(eemail);
                                        popup.add(email_tf);
                                        popup.add(email_er);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else if (selected == "Age") {
                                        JFrame popup = new JFrame("Edit Age");
                                        JLabel eage = new JLabel("Age:");
                                        eage.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        eage.setBounds(30, 20, 260, 50);
                                        JTextField age_tf = new JTextField();
                                        age_tf.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        age_tf.setBounds(100, 30, 260, 30);
                                        JLabel age_er = new JLabel();
                                        age_er.setBounds(100, 60, 300, 30);
                                        age_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        age_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean age_bool = false;
                                                int age_val = Integer.parseInt(age_tf.getText());
                                                if (age_val <= 18) {
                                                    age_er.setText("Enter a valid age (above 18)");
                                                    age_bool = false;
                                                } else {
                                                    age_er.setText("");
                                                    age_bool = true;
                                                }
                                                if (age_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);
                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(eage);
                                        popup.add(age_tf);
                                        popup.add(age_er);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else if (selected == "Gender") {
                                        JFrame popup = new JFrame("Edit Gender");
                                        JLabel gender = new JLabel("Select Gender:");
                                        JComboBox genderval = new JComboBox();
                                        genderval.addItem("- Select -");
                                        genderval.addItem("Male");
                                        genderval.addItem("Female");
                                        genderval.setFocusable(false);
                                        JLabel gender_er = new JLabel();
                                        gender.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                                        genderval.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                                        gender_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        gender.setBounds(10, 20, 260, 50);
                                        genderval.setBounds(170, 30, 200, 30);
                                        gender_er.setBounds(170, 60, 300, 30);
                                        gender_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean gender_bool = false;
                                                String gender_val = (String) genderval.getSelectedItem();
                                                if ("- Select -".equals(gender_val)) {
                                                    gender_er.setText("Please Select Your Gender");
                                                    gender_bool = false;
                                                } else {
                                                    gender_er.setText("");
                                                    gender_bool = true;
                                                }
                                                if (gender_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);
                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(genderval);
                                        popup.add(gender_er);
                                        popup.add(gender);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else if (selected == "Designation") {
                                        JFrame popup = new JFrame("Edit Designation");
                                        JLabel edesi = new JLabel("Desination:");
                                        edesi.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        edesi.setBounds(10, 20, 260, 50);
                                        JTextField desi_tf = new JTextField();
                                        desi_tf.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        desi_tf.setBounds(100, 30, 260, 30);
                                        JLabel desi_er = new JLabel();
                                        desi_er.setBounds(100, 60, 300, 30);
                                        desi_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        desi_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean desi_bool = false;
                                                String desi_val = desi_tf.getText();
                                                if (desi_val.isEmpty()) {
                                                    desi_er.setText("Enter Designation");
                                                    desi_bool = false;
                                                } else {
                                                    for (int i = 0; i < desi_val.length(); i++) {
                                                        char ch = desi_val.charAt(i);
                                                        if (!(ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z')) {
                                                            desi_er.setText("Enter Designation in Alphabet");
                                                            desi_bool = false;
                                                        } else {
                                                            desi_er.setText("");
                                                            desi_bool = true;
                                                        }
                                                    }
                                                }
                                                if (desi_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);
                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(edesi);
                                        popup.add(desi_tf);
                                        popup.add(desi_er);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else if (selected == "Salary") {
                                        JFrame popup = new JFrame("Edit Salary ");
                                        JLabel esal = new JLabel("Salary:");
                                        esal.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        esal.setBounds(10, 20, 260, 50);
                                        JTextField sal_tf = new JTextField();
                                        sal_tf.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        sal_tf.setBounds(100, 30, 260, 30);
                                        JLabel sal_er = new JLabel();
                                        sal_er.setBounds(100, 60, 300, 30);
                                        sal_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                                        sal_er.setForeground(Color.red);

                                        JButton back = new JButton("Back");
                                        JButton submit = new JButton("Submit");
                                        back.setFocusPainted(false);
                                        submit.setFocusPainted(false);
                                        back.setBounds(25, 150, 150, 30);
                                        submit.setBounds(230, 150, 150, 30);
                                        back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));

                                        back.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                popup.dispose();
                                                edit_emp.setVisible(true);
                                            }
                                        });

                                        submit.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                boolean sal_bool = false;
                                                String sal_val = sal_tf.getText();
                                                long sal_long = Long.parseLong(sal_tf.getText());
                                                for (int i = 0; i < sal_val.length(); i++) {
                                                    char ch = sal_val.charAt(i);
                                                    if (ch < '0' || ch > '9') {
                                                        sal_er.setText("Enter Salary in Numbers");
                                                        sal_bool = false;
                                                    } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                                        sal_er.setText("Enter Salary in Numbers");
                                                        sal_bool = false;
                                                    } else {
                                                        sal_er.setText("");
                                                        sal_bool = true;
                                                    }
                                                }

                                                if (sal_long < 0) {
                                                    sal_er.setText("Salary cannot be a negative number");
                                                    sal_bool = false;
                                                } else {
                                                    sal_er.setText("");
                                                    sal_bool = true;
                                                }
                                                if (sal_bool == true) {
                                                    JFrame dialog = new JFrame("Success");
                                                    JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                                    popupMsg.setBounds(20, 10, 300, 50);
                                                    popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    dialog.add(popupMsg);
                                                    JButton button = new JButton("OK");
                                                    button.setBounds(120, 60, 70, 20);
                                                    button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                                    button.setFocusPainted(false);
                                                    button.addActionListener(actionEvent2 -> {
                                                        dialog.dispose();
                                                        popup.dispose();
                                                        edit_emp.dispose();
                                                        home.setVisible(true);
                                                    });
                                                    dialog.add(button);
                                                    dialog.setLayout(null);
                                                    dialog.setBounds(500, 300, 350, 150);
                                                    dialog.setVisible(true);
                                                }
                                            }
                                        });
                                        popup.setLayout(null);
                                        popup.setBounds(455, 250, 425, 300);
                                        popup.add(esal);
                                        popup.add(sal_tf);
                                        popup.add(sal_er);
                                        popup.add(back);
                                        popup.add(submit);
                                        popup.setVisible(true);
                                    } else {
                                        JFrame popup = new JFrame("Invalid Choice");
                                        JLabel popupMsg = new JLabel("Please Select a valid field");
                                        popupMsg.setBounds(20, 10, 300, 50);
                                        popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        popup.add(popupMsg);
                                        JButton button = new JButton("OK");
                                        button.setBounds(120, 60, 70, 20);
                                        button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        button.setFocusPainted(false);
                                        button.addActionListener(actionEvent2 -> {
                                            popup.dispose();
                                        });
                                        popup.add(button);
                                        popup.setLayout(null);
                                        popup.setBounds(425, 250, 600, 300);
                                        popup.setVisible(true);
                                    }
                                }
                            });

                            edit_emp.add(edit_msg);
                            edit_emp.add(choice);
                            edit_emp.add(back);
                            edit_emp.add(next);
                            edit_emp.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                            edit_emp.setVisible(true);
                        }
                    }
                });

                cancel.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        emain.dispose();
                        home.setVisible(true);
                    }
                });

                emain.setVisible(true);
            }
        });

        search_emp.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                home.dispose();
                JFrame smain = new JFrame("Employee Management System - Search Employee");
                smain.setSize(1920, 1080);
                smain.setLayout(null);

                JLabel emp_id = new JLabel("Enter Employee ID:");
                JTextField emp_id_ip = new JTextField();

                JButton cancel = new JButton("Back");
                JButton submit = new JButton("Submit");

                emp_id.setFont(new Font("Times New Roman", Font.PLAIN, 35));
                emp_id_ip.setFont(new Font("Times New Roman", Font.PLAIN, 35));
                cancel.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                emp_id.setBounds(400, 200, 300, 75);
                emp_id_ip.setBounds(700, 222, 300, 40);
                cancel.setBounds(400, 320, 200, 50);
                submit.setBounds(800, 320, 200, 50);

                cancel.setFocusPainted(false);
                submit.setFocusPainted(false);

                smain.add(emp_id);
                smain.add(emp_id_ip);
                smain.add(cancel);
                smain.add(submit);

                submit.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        int id_val = Integer.parseInt(emp_id_ip.getText());

                        if (id_val == 10) {
                            JFrame pb = new JFrame("Fetching Employee Data.....");
                            pb.setLayout(null);
                            pb.setBounds(600, 350, 330, 125);

                            JProgressBar save = new JProgressBar(0, 100);
                            pb.add(save);
                            save.setStringPainted(true);
                            save.setBounds(50, 30, 220, 30);
                            Timer timer = new Timer(200, new ActionListener() {
                                int progress = 0;

                                public void actionPerformed(ActionEvent e) {
                                    if (progress <= 100) {
                                        save.setValue(progress);
                                        save.setString(progress + "%");
                                        progress += 25; // Simulate progress by incrementing 20% at a time
                                    } else {
                                        ((Timer) e.getSource()).stop();
                                        pb.dispose();
                                        home.dispose();

                                        JFrame vmain = new JFrame("Employee Management System - View Employee Details");
                                        vmain.setSize(1920, 1080);
                                        vmain.setLayout(null);

                                        String[] columnNames = { "Emp ID", "Name", "Phone Number", "Email Address",
                                                "Age", "Gender", "Designation", "Salary" };
                                        Object[][] data = {
                                                { 1, "Abc", "1234567890", "abc@gmail.com", "18", "Male", "CEO",
                                                        150000 },
                                        };
                                        DefaultTableModel model = new DefaultTableModel(data, columnNames);
                                        JTable emp_data = new JTable(model);

                                        // Create a JScrollPane and add the JTable to it
                                        JScrollPane scrollPane = new JScrollPane(emp_data);
                                        scrollPane.setBounds(30, 100, 1300, 500);

                                        // Set the font for column headers
                                        JTableHeader header = emp_data.getTableHeader();
                                        header.setFont(new Font("Times New Roman", Font.BOLD, 20));

                                        // Set the font for table cells
                                        emp_data.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                                        emp_data.setRowHeight(20);

                                        // Create a JButton for navigation
                                        JButton backbtn = new JButton("Back");
                                        backbtn.setBounds(150, 600, 150, 75);
                                        backbtn.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                                        backbtn.setFocusPainted(false);
                                        vmain.add(scrollPane);
                                        vmain.add(backbtn);

                                        backbtn.addActionListener(new ActionListener() {
                                            @Override
                                            public void actionPerformed(ActionEvent e) {
                                                vmain.dispose();
                                                home.setVisible(true);
                                            }
                                        });

                                        vmain.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                                        vmain.setVisible(true);
                                    }
                                }
                            });

                            timer.start(); // Start the timer to update the progress

                            pb.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                            pb.setVisible(true);

                        } else {
                            JFrame popup = new JFrame("Invalid ID");
                            JLabel popupMsg = new JLabel("The ID you entered is invalid.");
                            popupMsg.setBounds(20, 10, 300, 50);
                            popupMsg.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                            popup.add(popupMsg);
                            JButton button = new JButton("OK");
                            button.setBounds(120, 60, 70, 20);
                            button.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                            button.setFocusPainted(false);
                            button.addActionListener(actionEvent2 -> {
                                popup.dispose();
                            });
                            popup.add(button);
                            popup.setLayout(null);
                            popup.setBounds(525, 250, 350, 150);
                            popup.setVisible(true);
                        }

                    }
                });

                cancel.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        smain.dispose();
                        home.setVisible(true);
                    }
                });

                smain.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                smain.setVisible(true);
            }
        });

        home.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        home.setVisible(true);
    }

    public static void main(String[] args) {
        EmployeeManagementSystem ems = new EmployeeManagementSystem();
    }
}