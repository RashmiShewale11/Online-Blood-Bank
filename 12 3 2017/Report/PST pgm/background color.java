import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code=exp6_11_5.java height=300 width=300>
</applet>*/
public class exp6_11_5 extends JApplet implements ActionListener
{
   Container contentPane;
   JRadioButton j1,j2,j3;
   public void init()
  {
	contentPane=getContentPane();
  	contentPane.setLayout(new FlowLayout());
  	j1=new JRadioButton("Red"); 
  	j2=new JRadioButton("Green");
  	j3=new JRadioButton("Blue");
 	ButtonGroup cbg=new ButtonGroup();
 	cbg.add(j1);
 	cbg.add(j2);
 	cbg.add(j3);
	j1.addActionListener(this);
	j2.addActionListener(this);
	j3.addActionListener(this);
 	contentPane.add(j1);
 	contentPane.add(j2);
 	contentPane.add(j3);
  }
  public void actionPerformed(ActionEvent ae)
  {
	if(ae.getSource()==j1)
   	{   
     	 contentPane.setBackground(Color.RED);
   	}
  	else if(ae.getSource()==j2)
  	{
   	 contentPane.setBackground(Color.GREEN);
	}
	else
	{
    	 contentPane.setBackground(Color.BLUE);
	}
  }
}
 
 
