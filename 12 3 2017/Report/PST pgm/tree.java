import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
import javax.swing.tree.*;
/*<applet code="exp5_11_2.class" width=200 height=400>
</applet>*/
public class exp5_11_2 extends JApplet
{
   JTree tr1;
   JTextField t1=new JTextField(25);
   public void init()
   {
	Container c1= getContentPane();
	DefaultMutableTreeNode top=new DefaultMutableTreeNode("Root");
  	DefaultMutableTreeNode a=new DefaultMutableTreeNode("Vegetables");
  	DefaultMutableTreeNode b=new DefaultMutableTreeNode("Fruit");
  	DefaultMutableTreeNode a1=new DefaultMutableTreeNode("Capsicum");
  	DefaultMutableTreeNode a2=new DefaultMutableTreeNode("Carrot");
  	DefaultMutableTreeNode a3=new DefaultMutableTreeNode("Tomato");
  	DefaultMutableTreeNode a4=new DefaultMutableTreeNode("Potato");
  	DefaultMutableTreeNode b1=new DefaultMutableTreeNode("Banana");
  	DefaultMutableTreeNode b2=new DefaultMutableTreeNode("Mango");
  	DefaultMutableTreeNode b3=new DefaultMutableTreeNode("Apple");
    
    	top.add(a);
       	top.add(b);
       	a.add(a1);  a.add(a2);
       	a.add(a3);  a.add(a4);
      	b.add(b1);  b.add(b2);
      	b.add(b3);
 
    	tr1=new JTree(top);

     	int h= ScrollPaneConstants.HORIZONTAL_SCROLLBAR_AS_NEEDED;
     	int v= ScrollPaneConstants.VERTICAL_SCROLLBAR_AS_NEEDED;
       	JScrollPane jsp=new JScrollPane(tr1,v,h);
      	c1.add(jsp,BorderLayout.CENTER);
      	c1.add(t1,BorderLayout.SOUTH);
      	tr1.addMouseListener(new MouseAdapter()
     	{
        	  public void mouseClicked(MouseEvent me)
         	  {
            	     doMouseClicked(me);  
         	  }
    	}  );
}
  void doMouseClicked(MouseEvent me)
  {
	TreePath tp=tr1.getPathForLocation(me.getX(),me.getY());
         	t1.setText(tp.toString());
  }
}
