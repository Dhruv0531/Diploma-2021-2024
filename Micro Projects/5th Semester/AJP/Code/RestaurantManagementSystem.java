import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.JTableHeader;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

class RestaurantManagementSystem {
    RestaurantManagementSystem() {
        JFrame home = new JFrame("Restaurant Management System");
        home.setSize(1920, 1080);
        home.setLayout(null);

        JLabel title = new JLabel("Welcome to Restaurant Management System");
        JButton update_item = new JButton("Update Item");
        JButton insert_item = new JButton("Insert Item");
        JButton billing_info = new JButton("Billing Info");
        JButton food_info = new JButton("Food Info");
        JButton del_item = new JButton("Delete Item");
        JButton exit = new JButton("Exit");

        title.setBounds(425, 50, 700, 100);
        update_item.setBounds(600, 250, 300, 75);
        insert_item.setBounds(600, 150, 300, 75);
        billing_info.setBounds(600, 450, 300, 75);
        food_info.setBounds(600, 550, 300, 75);
        del_item.setBounds(600, 350, 300, 75);
        exit.setBounds(600, 650, 300, 75);

        update_item.setFocusPainted(false);
        insert_item.setFocusPainted(false);
        billing_info.setFocusPainted(false);
        food_info.setFocusPainted(false);
        del_item.setFocusPainted(false);
        exit.setFocusPainted(false);

        title.setFont(new Font("Times New Roman", Font.BOLD, 35));
        update_item.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        insert_item.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        billing_info.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        food_info.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        del_item.setFont(new Font("Times New Roman", Font.PLAIN, 22));
        exit.setFont(new Font("Times New Roman", Font.PLAIN, 22));

        exit.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });

        insert_item.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JFrame insert = new JFrame("Restaurant Management System - Insert Item");
                insert.setSize(1920, 1080);
                insert.setLayout(null);

                JLabel name = new JLabel("Enter Name");
                name.setBounds(100, 50, 260, 50);
                JTextField nametf = new JTextField();
                JLabel name_er = new JLabel();
                name_er.setBounds(350, 95, 260, 30);
                name_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                nametf.setBounds(350, 50, 260, 50);
                name.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                nametf.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JLabel price = new JLabel("Enter Price");
                price.setBounds(100, 125, 260, 50);
                JTextField pricetf = new JTextField();
                JLabel price_er = new JLabel();
                price_er.setBounds(350, 165, 260, 30);
                price_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                pricetf.setBounds(350, 125, 260, 50);
                price.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                pricetf.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JLabel quantity = new JLabel("Enter Quantity");
                quantity.setBounds(100, 200, 260, 50);
                JTextField quantitytf = new JTextField();
                JLabel qty_er = new JLabel();
                qty_er.setBounds(350, 240, 260, 30);
                qty_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                quantitytf.setBounds(350, 200, 260, 50);
                quantity.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                quantitytf.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JButton submit = new JButton("Submit");
                submit.setBounds(400, 700, 250, 50);
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JButton back = new JButton("Back");
                back.setBounds(100, 700, 250, 50);
                back.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                name_er.setForeground(Color.red);
                price_er.setForeground(Color.red);
                qty_er.setForeground(Color.red);

                insert.add(name);
                insert.add(nametf);
                insert.add(name_er);
                insert.add(price);
                insert.add(pricetf);
                insert.add(price_er);
                insert.add(quantity);
                insert.add(quantitytf);
                insert.add(qty_er);
                insert.add(submit);
                insert.add(back);
                back.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        insert.dispose();
                        home.setVisible(true);
                    }
                });

                submit.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        boolean name_bool = false, price_bool = false, qty_bool = false;
                        String name_val = nametf.getText();
                        String price_val = pricetf.getText();
                        int price_int = Integer.parseInt(pricetf.getText());
                        String qty_val = quantitytf.getText();
                        int qty_int = Integer.parseInt(quantitytf.getText());
                        int i;
                        char ch;
                        for (i = 0; i < name_val.length(); i++) {
                            ch = name_val.charAt(i);
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

                            for (i = 0; i < price_val.length(); i++) {
                                ch = price_val.charAt(i);
                                if (ch < '0' || ch > '9') {
                                    price_er.setText("Enter Price in Numbers");
                                    price_bool = false;
                                } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                    price_er.setText("Enter Price in Numbers");
                                    price_bool = false;
                                } else {
                                    price_er.setText("");
                                    price_bool = true;
                                }
                            }

                            if (price_int < 0) {
                                price_er.setText("Price cannot be a negative number");
                                price_bool = false;
                            } else {
                                price_er.setText("");
                                price_bool = true;
                            }

                            for (i = 0; i < qty_val.length(); i++) {
                                ch = qty_val.charAt(i);
                                if (ch < '0' || ch > '9') {
                                    qty_er.setText("Enter Price in Numbers");
                                    qty_bool = false;
                                } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                    qty_er.setText("Enter Price in Numbers");
                                    qty_bool = false;
                                } else {
                                    qty_er.setText("");
                                    qty_bool = true;
                                }
                            }

                            if (qty_int < 0) {
                                qty_er.setText("Price cannot be a negative number");
                                qty_bool = false;
                            } else {
                                qty_er.setText("");
                                qty_bool = true;
                            }
                        }
                    }
                });

                insert.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                insert.setVisible(true);
            }
        });
        update_item.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JFrame update = new JFrame("Restaurant Management System - Update Item");
                update.setSize(1920, 1080);
                update.setLayout(null);

                JLabel name = new JLabel("Enter Name");
                name.setBounds(100, 50, 260, 50);
                JTextField nametf = new JTextField();
                JLabel name_er = new JLabel();
                name_er.setBounds(350, 95, 260, 30);
                name_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                nametf.setBounds(350, 50, 260, 50);
                name.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                nametf.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JLabel price = new JLabel("Enter Price");
                price.setBounds(100, 125, 260, 50);
                JTextField pricetf = new JTextField();
                JLabel price_er = new JLabel();
                price_er.setBounds(350, 165, 260, 30);
                price_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                pricetf.setBounds(350, 125, 260, 50);
                price.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                pricetf.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JLabel quantity = new JLabel("Enter Quantity");
                quantity.setBounds(100, 200, 260, 50);
                JTextField quantitytf = new JTextField();
                JLabel qty_er = new JLabel();
                qty_er.setBounds(350, 240, 260, 30);
                qty_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                quantitytf.setBounds(350, 200, 260, 50);
                quantity.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                quantitytf.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JButton submit = new JButton("Update");
                submit.setBounds(400, 700, 250, 50);
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JButton back = new JButton("Back");
                back.setBounds(100, 700, 250, 50);
                back.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                name_er.setForeground(Color.red);
                price_er.setForeground(Color.red);
                qty_er.setForeground(Color.red);

                update.add(name);
                update.add(nametf);
                update.add(name_er);
                update.add(price);
                update.add(pricetf);
                update.add(price_er);
                update.add(quantity);
                update.add(quantitytf);
                update.add(qty_er);
                update.add(submit);
                update.add(back);

                back.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        update.dispose();
                        home.setVisible(true);
                    }
                });
                submit.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        boolean name_bool = false, price_bool = false, qty_bool = false;
                        String name_val = nametf.getText();
                        String price_val = pricetf.getText();
                        int price_int = Integer.parseInt(pricetf.getText());
                        String qty_val = quantitytf.getText();
                        int qty_int = Integer.parseInt(quantitytf.getText());
                        int i;
                        char ch;
                        for (i = 0; i < name_val.length(); i++) {
                            ch = name_val.charAt(i);
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

                            for (i = 0; i < price_val.length(); i++) {
                                ch = price_val.charAt(i);
                                if (ch < '0' || ch > '9') {
                                    price_er.setText("Enter Price in Numbers");
                                    price_bool = false;
                                } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                    price_er.setText("Enter Price in Numbers");
                                    price_bool = false;
                                } else {
                                    price_er.setText("");
                                    price_bool = true;
                                }
                            }

                            if (price_int < 0) {
                                price_er.setText("Price cannot be a negative number");
                                price_bool = false;
                            } else {
                                price_er.setText("");
                                price_bool = true;
                            }

                            for (i = 0; i < qty_val.length(); i++) {
                                ch = qty_val.charAt(i);
                                if (ch < '0' || ch > '9') {
                                    qty_er.setText("Enter Price in Numbers");
                                    qty_bool = false;
                                } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                    qty_er.setText("Enter Price in Numbers");
                                    qty_bool = false;
                                } else {
                                    qty_er.setText("");
                                    qty_bool = true;
                                }
                            }

                            if (qty_int < 0) {
                                qty_er.setText("Price cannot be a negative number");
                                qty_bool = false;
                            } else {
                                qty_er.setText("");
                                qty_bool = true;
                            }
                        }
                    }
                });
                update.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                update.setVisible(true);
            }
        });
        del_item.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JFrame delete = new JFrame("Restaurant Management System - Delete Item");
                delete.setSize(1920, 1080);
                delete.setLayout(null);

                JLabel name = new JLabel("Enter Name");
                name.setBounds(100, 50, 260, 50);
                JTextField nametf = new JTextField();
                nametf.setBounds(350, 50, 260, 50);
                name.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                nametf.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                JLabel name_er = new JLabel();
                name_er.setBounds(350, 95, 260, 30);
                name_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                name_er.setForeground(Color.red);

                JButton submit = new JButton("Delete");
                submit.setBounds(400, 700, 250, 50);
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                JButton back = new JButton("Back");
                back.setBounds(100, 700, 250, 50);
                back.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                delete.add(name);
                delete.add(nametf);
                delete.add(name_er);
                delete.add(submit);
                delete.add(back);

                back.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        delete.dispose();
                        home.setVisible(true);
                    }
                });
                submit.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        boolean name_bool = false, price_bool = false, qty_bool = false;
                        String name_val = nametf.getText();
                        int i;
                        char ch;
                        for (i = 0; i < name_val.length(); i++) {
                            ch = name_val.charAt(i);
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
                    }
                });
                delete.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                delete.setVisible(true);
            }
        });
        billing_info.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JFrame bill = new JFrame("Restaurant Management System - Delete Item");
                bill.setSize(1920, 1080);
                bill.setLayout(null);

                JLabel food = new JLabel("Enter Food Name:");
                JTextField food_ip = new JTextField();
                JLabel food_er = new JLabel();

                JLabel quantity = new JLabel("Enter Quantity:");
                JTextField quantity_ip = new JTextField();
                JLabel quantity_er = new JLabel();

                JLabel totalitem = new JLabel("Total Items:");
                JLabel totalitem_val = new JLabel("3");
                JLabel totalprice = new JLabel("Total Price:");
                JLabel totalprice_val = new JLabel("510");

                JButton back = new JButton("Back");
                JButton submit = new JButton("Add");

                food.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                food_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                food_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                back.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                submit.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                quantity.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                quantity_ip.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                quantity_er.setFont(new Font("Times New Roman", Font.PLAIN, 15));
                totalitem.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                totalitem_val.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                totalprice.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                totalprice_val.setFont(new Font("Times New Roman", Font.PLAIN, 25));

                food.setBounds(100, 50, 260, 50);
                food_ip.setBounds(350, 50, 260, 50);
                food_er.setBounds(350, 95, 260, 30);
                quantity.setBounds(100, 125, 260, 50);
                quantity_ip.setBounds(350, 125, 260, 50);
                quantity_er.setBounds(350, 165, 260, 30);
                back.setBounds(95, 200, 250, 50);
                submit.setBounds(355, 200, 250, 50);
                totalitem.setBounds(100, 250, 250, 50);
                totalitem_val.setBounds(400, 250, 250, 50);
                totalprice.setBounds(100, 350, 250, 50);
                totalprice_val.setBounds(400, 350, 250, 50);

                totalitem.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                totalitem_val.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                totalprice.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                totalprice_val.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                food_er.setForeground(Color.red);
                quantity_er.setForeground(Color.red);

                // Create column names and data
                String[] columnNames = { "Sr.No", "Food Name", "Quantity", "Price" };
                Object[][] data = {
                        { 1, "Pav Bhaji", "2", "180" },
                        { 2, "Soyabean Rice", "1", "150" }
                };

                DefaultTableModel model = new DefaultTableModel(data, columnNames);
                JTable bill_info = new JTable(model);

                // Create a JScrollPane and add the JTable to it
                JScrollPane scrollPane = new JScrollPane(bill_info);
                scrollPane.setBounds(655, 50, 800, 600);

                // Set the font for column headers
                JTableHeader header = bill_info.getTableHeader();
                header.setFont(new Font("Times New Roman", Font.BOLD, 20));

                // Set the font for table cells
                bill_info.setFont(new Font("Times New Roman", Font.PLAIN, 20));
                bill_info.setRowHeight(20);

                // Create a JButton for navigation
                JButton backbtn = new JButton("Back");
                backbtn.setBounds(150, 600, 150, 75);
                backbtn.setFont(new Font("Times New Roman", Font.PLAIN, 25));
                backbtn.setFocusPainted(false);

                bill.add(scrollPane);
                bill.add(food);
                bill.add(food_ip);
                bill.add(food_er);
                bill.add(quantity);
                bill.add(quantity_ip);
                bill.add(quantity_er);
                bill.add(back);
                bill.add(submit);
                bill.add(scrollPane);
                bill.add(totalitem);
                bill.add(totalitem_val);
                bill.add(totalprice);
                bill.add(totalprice_val);

                back.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        bill.dispose();
                        home.setVisible(true);
                    }
                });
                submit.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        boolean food_bool = false, qty_bool = false;
                        String food_val = food_ip.getText();
                        String qty_val = quantity_ip.getText();
                        int qty_int = Integer.parseInt(quantity_ip.getText());
                        int i;
                        char ch;
                        for (i = 0; i < food_val.length(); i++) {
                            ch = food_val.charAt(i);
                            if (ch < 'a' && ch > 'z' || ch >= 'A' && ch <= 'Z') {
                                food_er.setText("Enter Name in Alphabet");
                                food_bool = false;

                            } else if (!(ch < '0' || ch > '9')) {
                                food_er.setText("Enter Name in Alphabet");
                                food_bool = false;
                            } else {
                                food_er.setText("");
                                food_bool = true;
                            }
                            for (i = 0; i < qty_val.length(); i++) {
                                ch = qty_val.charAt(i);
                                if (ch < '0' || ch > '9') {
                                    quantity_er.setText("Enter Quantity in Numbers");
                                    qty_bool = false;
                                } else if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z') {
                                    quantity_er.setText("Enter Quantity in Numbers");
                                    qty_bool = false;
                                } else {
                                    quantity_er.setText("");
                                    qty_bool = true;
                                }
                            }

                            if (qty_int < 0) {
                                quantity_er.setText("Price cannot be a negative number");
                                qty_bool = false;
                            } else {
                                quantity_er.setText("");
                                qty_bool = true;
                            }
                        }
                    }
                });
                bill.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                bill.setVisible(true);

            }
        });
        food_info.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JFrame vmain = new JFrame("Restaurant Management System - Food Info");
                vmain.setSize(1920, 1080);
                vmain.setLayout(null);

                // Create column names and data
                String[] columnNames = { "Sr.NO", "Food Name", "Price" };
                Object[][] data = {
                        { "1", "Pav Bhaji", "180" },
                        { "2", "Panner Tikka", "200" },
                        { "3", "Soyabean Rice", "150" },
                        { "4", "Hakka Noodles", "100" },
                        { "5", "Momos (Cheese)", "125" }
                };
                DefaultTableModel model = new DefaultTableModel(data, columnNames);
                JTable emp_data = new JTable(model);

                // Create a JScrollPane and add the JTable to it
                JScrollPane scrollPane = new JScrollPane(emp_data);
                scrollPane.setBounds(30, 100, 700, 500);

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
        });

        home.add(title);
        home.add(insert_item);
        home.add(update_item);
        home.add(billing_info);
        home.add(food_info);
        home.add(del_item);
        home.add(exit);
        home.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        home.setVisible(true);
    }

    public static void main(String[] args) {
        RestaurantManagementSystem rms = new RestaurantManagementSystem();
    }
}