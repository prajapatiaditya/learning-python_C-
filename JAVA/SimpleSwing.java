import javax.swing.*;

public class SimpleSwing {
    public static void main(String[] args) {
        JFrame frame = new JFrame("Simple Example");
        JButton button = new JButton("Click Me!");
        button.setBounds(100, 100, 120, 40);

        frame.add(button);
        frame.setSize(300, 300);
        frame.setLayout(null);
        frame.setVisible(true);
    }
}
