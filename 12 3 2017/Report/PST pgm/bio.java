import java.awt.*;
import java.applet.*;
public class bio extends Applet
{
	public void init()
	{
	  Label name= new Label("Name:");
	  TextField txt=new TextField(45);
	  Label add= new Label("Address:");
	  TextArea area= new TextArea();
	 
	  //For Checkbox
	  Label education=new Label("Education");
	  Checkbox chk1= new Checkbox("SSC");
	  Checkbox chk2= new Checkbox("HSC");
	  Checkbox chk3= new Checkbox("Diploma");
 	
	  //For Radio Buttons
	  Label gender=new Label("Gender:");
	  CheckboxGroup radio= new CheckboxGroup();
	  Checkbox male = new Checkbox("Male", radio, true);
	  Checkbox female = new Checkbox("Female", radio,true); 
	  
	  //For Choice
	  Label branch= new Label("Branch:");
	  Choice ch=new Choice();
	  ch.add("Computer Technology");
	  ch.add("Infomation Technology");
	  ch.add("Electronics and Tele  Communication");
	  ch.add("Mechanical Engineering");
	  ch.add("Civil Engineering");     
	  
	  //For List
	  Label hobby=new Label("Hobbies:");
	  List list=new List(6,true);
	  list.add("Reading");
	  list.add("Dancing");
	  list.add("Swimming");
	  list.add("Writing");
	  list.add("Drawing");
	  
	  add(name);
	  add(txt);
	  add(add);
	  add(area);
	  add(gender);
	  add(male);
	  add(female);
	  add(education);
	  add(chk1);
	  add(chk2);
	  add(chk3);
	  add(branch);
	  add(ch);
	  add(hobby);
	  add(list);
  	  }
}
/*<Applet code=bio.class height=500 width=500>
</Applet> */