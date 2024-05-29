import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

class EmpAdd {
    EmpAdd() {
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
                                ename.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                ename.setBounds(10,20,260,50);
                                JTextField name_tf = new JTextField();
                                name_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                name_tf.setBounds(100,30,260,30);
                                JLabel name_er = new JLabel();
                                name_er.setBounds(100,60,300,30);
                                name_er.setFont(new Font("Times New Roman",Font.PLAIN,15));
                                name_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if(name_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
                            }
                            else if (selected == "Phone Number") {
                                JFrame popup = new JFrame("Edit Phone Number");
                                JLabel ephone = new JLabel("Phone Number:");
                                ephone.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                ephone.setBounds(10,20,260,50);
                                JTextField phone_tf = new JTextField();
                                phone_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                phone_tf.setBounds(150,30,230,30);
                                JLabel phone_er = new JLabel();
                                phone_er.setBounds(150,60,300,30);
                                phone_er.setFont(new Font("Times New Roman",Font.PLAIN,15));
                                phone_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if(phone_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
                            }
                            else if (selected == "Email Address") {
                                JFrame popup = new JFrame("Edit Email Address");
                                JLabel eemail = new JLabel("Email:");
                                eemail.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                eemail.setBounds(10,20,260,50);
                                JTextField email_tf = new JTextField();
                                email_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                email_tf.setBounds(100,30,260,30);
                                JLabel email_er = new JLabel();
                                email_er.setBounds(100,60,300,30);
                                email_er.setFont(new Font("Times New Roman",Font.PLAIN,15));
                                email_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if (atIndex <= 0 || dotIndex <= atIndex || dotIndex == email_val.length() - 1) {
                                            email_er.setText("Email should contain '@' and '.' ");
                                            email_bool = false;
                                        } else {
                                            email_er.setText("");
                                            email_bool = true;
                                        }
                                        if(email_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
                            }
                            else if (selected == "Age") {
                                JFrame popup = new JFrame("Edit Age");
                                JLabel eage = new JLabel("Age:");
                                eage.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                eage.setBounds(30,20,260,50);
                                JTextField age_tf = new JTextField();
                                age_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                age_tf.setBounds(100,30,260,30);
                                JLabel age_er = new JLabel();
                                age_er.setBounds(100,60,300,30);
                                age_er.setFont(new Font("Times New Roman",Font.PLAIN,15));
                                age_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if(age_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
                            }
                            else if (selected == "Gender") {
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
                                gender.setBounds(10,20,260,50);
                                genderval.setBounds(170,30,200,30);
                                gender_er.setBounds(170,60,300,30);
                                gender_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if(gender_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
                            }
                            else if (selected == "Designation") {
                                JFrame popup = new JFrame("Edit Designation");
                                JLabel edesi = new JLabel("Desination:");
                                edesi.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                edesi.setBounds(10,20,260,50);
                                JTextField desi_tf = new JTextField();
                                desi_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                desi_tf.setBounds(100,30,260,30);
                                JLabel desi_er = new JLabel();
                                desi_er.setBounds(100,60,300,30);
                                desi_er.setFont(new Font("Times New Roman",Font.PLAIN,15));
                                desi_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if(desi_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
                            }
                            else if (selected == "Salary") {
                                JFrame popup = new JFrame("Edit Salary ");
                                JLabel esal = new JLabel("Salary:");
                                esal.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                esal.setBounds(10,20,260,50);
                                JTextField sal_tf = new JTextField();
                                sal_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                sal_tf.setBounds(100,30,260,30);
                                JLabel sal_er = new JLabel();
                                sal_er.setBounds(100,60,300,30);
                                sal_er.setFont(new Font("Times New Roman",Font.PLAIN,15));
                                sal_er.setForeground(Color.red);

                                JButton back = new JButton("Back");
                                JButton submit = new JButton("Submit");
                                back.setFocusPainted(false);
                                submit.setFocusPainted(false);
                                back.setBounds(25,150,150,30);
                                submit.setBounds(230,150,150,30);
                                back.setFont(new Font("Times New Roman",Font.PLAIN,20));
                                submit.setFont(new Font("Times New Roman",Font.PLAIN,20));

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
                                        if(sal_bool==true){
                                            JFrame dialog = new JFrame("Success");
                                            JLabel popupMsg = new JLabel("Employee Deatails Updated!");
                                            popupMsg.setBounds(20,10,300,50);
                                            popupMsg.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            dialog.add(popupMsg);
                                            JButton button = new JButton("OK");
                                            button.setBounds(120,60,70,20);
                                            button.setFont(new Font("Times New Roman",Font.PLAIN, 20));
                                            button.addActionListener(actionEvent2 -> {
                                                dialog.dispose();
                                                popup.dispose();
                                                edit_emp.dispose();
                                            });
                                            dialog.add(button);
                                            dialog.setLayout(null);
                                            dialog.setBounds(500, 300,350, 150);
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
            }
        });

        emain.setVisible(true);

    }

    public static void main(String[] args) {
        EmpAdd e = new EmpAdd();
    }
}