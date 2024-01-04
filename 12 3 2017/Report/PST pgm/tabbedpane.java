import java.awt.*;
import java.applet.*;
import javax.swing.*;
/*<applet code="exp4_11_3" width=300 height=100>
</applet>*/
public class exp4_11_3 extends JApplet
{
  public void init() 
  {
	JTabbedPane jtp = new JTabbedPane();
  	Container c1=getContentPane();
  	jtp.addTab("city", new jp1());
   	jtp.addTab("colors",new jp2());
   	jtp.addTab("flavours",new jp3());
	c1.add(jtp);
  }
}
class jp1 extends JPanel
{
 public jp1()
 {
	JButton b1=new JButton("Nashik"); 
  	add(b1);
  	JButton b2=new JButton("Jalgaon");
  	add(b2);
  	JButton b3=new JButton("Pune");
  	add(b3);
  	JButton b4=new JButton("Mumbai");
  	add(b4); 
 }
}
class jp2 extends JPanel
{
 public jp2()
 {
	JCheckBox c1=new JCheckBox("Pink");
	JCheckBox c2=new JCheckBox("Blue");
	JCheckBox c3=new JCheckBox("Red");
  }
}
class jp3 extends JPanel
{
 public jp3()
 {
	JComboBox cb=new JComboBox();
	cb.addItem("Choco");
	cb.addItem("Mango");
	cb.addItem("Vanilla");
	cb.addItem("Dark Choco");
	cb.addItem("ButterScotch");
	add(cb);
  }
}



