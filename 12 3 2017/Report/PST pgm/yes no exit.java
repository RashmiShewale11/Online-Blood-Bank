import java.awt.*;
import java.awt.event.*;
import java.applet.*;
/*<applet code="exp8_11_2.class" height=300 width=400>
</applet>*/
public class exp8_11_2 extends Applet implements ActionListener
{
  Button b1,b2,b3;
  String msg="";
  public void init()
  {
	Font f=new Font("Times",Font.PLAIN,30);
	b1=new Button("Yes");
	b2=new Button("No");
	b3=new Button("Exit");

	add(b1); add(b2); add(b3);

	b1.addActionListener(this);
	b2.addActionListener(this);
	b3.addActionListener(this); 
  }
  public void actionPerformed(ActionEvent ae)
  {
	if(ae.getSource()==b1)
	msg="You pressed Yes";
 	else if(ae.getSource()==b2)
	msg="You pressed No";
	else if(ae.getSource()==b3)
	msg="You pressed Exit";
	repaint();
  }
  public void paint(Graphics g)
  {
  	g.drawString(msg,20,70);
  }
}
