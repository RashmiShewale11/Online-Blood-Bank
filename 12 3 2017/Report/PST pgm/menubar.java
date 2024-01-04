import java.awt.*;
import java.applet.*;
/*<applet code=exp3_11_1 width=500 height=500>
</applet>*/
public class exp3_11_1 extends Frame
{
  public static void main(String args[])
  {
	exp3_11_1 e=new exp3_11_1();
	e.setVisible(true);
	MenuBar mb=new MenuBar();
	e.setMenuBar(mb);

	Menu insert=new Menu("Insert");
	Menu home=new Menu("Home");
	
	mb.add(insert); mb.add(home);
	
	CheckboxMenuItem m1=new CheckboxMenuItem("Picture"); 
	CheckboxMenuItem m2=new CheckboxMenuItem("Paste");

	insert.add(m1);  home.add(m2);
  }
}