import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class PB {
    PB() {
        JFrame popup = new JFrame("Edit Phone Number");
        JLabel ephone = new JLabel("Phone Number:");
        ephone.setFont(new Font("Times New Roman",Font.PLAIN,20));
        ephone.setBounds(10,20,260,50);
        JTextField phone_tf = new JTextField();
        phone_tf.setFont(new Font("Times New Roman",Font.PLAIN,20));
        phone_tf.setBounds(100,30,260,30);
        JLabel phone_er = new JLabel();
        phone_er.setBounds(100,60,300,30);
        phone_er.setFont(new Font("Times New Roman",Font.PLAIN,20));
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

                    });
                    dialog.add(button);
                    dialog.setLayout(null);
                    dialog.setBounds(500, 300,350, 150);
                    dialog.setVisible(true);
                }
            }

        });
    popup.setVisible(true);
    }

    public static void main(String[] args) {
        PB p = new PB();
    }
}
