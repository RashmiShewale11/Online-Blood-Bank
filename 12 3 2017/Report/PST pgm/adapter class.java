import java.applet.*;
import java.awt.*;
import java.awt.event.*; 
/* <applet code = "exp9" width = 400 height = 200>
</applet> */ 
public class exp9 extends Applet
{   
  int x=0;   int y=0;  
  public void init()  
  {   
	addMouseListener(new mymouselistener());  
  } 
 public void paint(Graphics g) 
 {  
	g.drawString("Java Is Fun",x,y); 
 } 
 public class mymouselistener extends MouseAdapter
 { 
 	public void mouseClicked(MouseEvent e)
   	{ 
  	  x = e.getX(); 
  	  y = e.getY(); 
  	  repaint();  
 	}  
 }
} 