import java.awt.*;
import java.awt.event.*;
import java.applet.*;
/*<applet code="exp7_11_3.class"  width=300 height=300>
</applet>*/
public class exp7_11_3 extends Applet implements ActionListener
{
  Label l1,l2;
  TextField t1,t2;
  Button b1;
  public void init()
  {
	 l1=new Label("Enter the first element ");
          	 t1=new TextField(15);
          	 l2=new Label("Enter the second element ");
          	 t2=new TextField(13);
          	 b1=new Button("LARGEST");
          
          	add(l1); add(t1); add(l2); add(t2); add(b1); 
          
          	b1.addActionListener(this);
  }
  public void  actionPerformed(ActionEvent ae)
  {
               repaint();
  }
 public void paint(Graphics g)
 {
	int max;
            	int a=Integer.parseInt(t1.getText()); 
            	int b=Integer.parseInt(t2.getText());
	
	if(a>b)
 	   max=a;
 	else
                       max=b;
       	g.drawString("Largest no="+max,10,100);
  }
}  

