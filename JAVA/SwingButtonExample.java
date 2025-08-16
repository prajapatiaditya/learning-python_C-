import javax.swing.*;
import java.awt.event.*;

public class SwingButtonExample {
    public static void main(String[] args) {
        // Create a new JFrame
        JFrame frame = new JFrame("Swing Button Example");

        // Create a JButton
        JButton button = new JButton("Click Me");

        // Set position and size of the button (x, y, width, height)
        button.setBounds(100, 100, 120, 40);

        // Add action listener to the button
        button.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                // Show a message dialog on button click
                JOptionPane.showMessageDialog(frame, "Button was clicked!");
            }
        });

        // Add button to the frame
        frame.add(button);

        // Set frame properties
        frame.setSize(350, 250);                      // Set frame size
        frame.setLayout(null);                        // No layout manager
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); // Close on exit
        frame.setVisible(true);                      // Make frame visible
    }
}
