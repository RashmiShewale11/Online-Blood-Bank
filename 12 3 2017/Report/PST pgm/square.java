import java.applet.*;
import java.awt.event.*;
import java.awt.*;
/*<applet code="exp8_11_1.class" width=300 height=300>
</applet> */
public class exp8_11_1 extends Applet implements ActionListener
{
  TextField t1,t2;
  Button b;
  public void init()
  {
	Label l=new Label("Enter the Number");
	Label l1=new Label("Square:-");
	t1=new TextField(10);
 	t2=new TextField(10);
	b=new Button("Click Here");
	setLayout(new FlowLayout());
	
	add(l); add(t1); add(l1); add(t2); add(b);
	b.addActionListener(this);
  }
  public void actionPerformed(ActionEvent a)
  {
  	if(a.getSource()==b)
	{
 	  int no=Integer.parseInt(t1.getText());
	  int square=no*no;
	  t2.setText(Integer.toString(square));
	}
  }
}

