import java.applet.*;
import java.awt.*;
/*<applet code=gridlayout width=500 height=500>
</applet>*/
public class gridlayout extends Applet
{	public void init()
	{
	GridLayout g1=new GridLayout(2,3);
	setLayout(g1);
	Button b1=new Button("Rashmi");
	Button b2=new Button("Aishu");
	Button b3=new Button("Sanju");
	Button b4=new Button("Jeju");
	Button b5=new Button("Kordya");
	Button b6=new Button("Gavali");
	  add(b1);  add(b2);  add(b3);  add(b4);  add(b5);  add(b6);
	}
}
