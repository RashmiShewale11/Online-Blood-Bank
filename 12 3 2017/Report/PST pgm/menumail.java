import java.awt.*;
public class exp3_3 extends Frame
{
public static void main(String args[])
{
	exp3_3 m=new exp3_3();
	m.setVisible(true);
	MenuBar mbr= new MenuBar();
	m.setMenuBar(mbr);

	Menu page_layoutmenu=new Menu("Pago Layout");
	Menu referencesmenu=new Menu("References");
	Menu mailingmenu=new Menu("Mailing");
	mailingmenu.setEnabled(false);

	mbr.add(page_layoutmenu);
	mbr.add(referencesmenu);
	mbr.add(mailingmenu);

}
}