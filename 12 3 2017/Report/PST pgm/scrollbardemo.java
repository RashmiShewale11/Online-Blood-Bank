import java.applet.*;
import java.awt.*;
/*<applet code=scrollbardemo width=300 height=500>
</applet>*/
public class scrollbardemo extends Applet
{
	Scrollbar b1=new Scrollbar(Scrollbar.VERTICAL,500,0,20,500);
	Scrollbar b2=new Scrollbar(Scrollbar.HORIZONTAL,10,0,1,10);
	public void init()
	{
	  add(b1);add(b2);
	}
}