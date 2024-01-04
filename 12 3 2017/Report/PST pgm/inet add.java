import java.net.*;
class exp10_7
{
  public static void main(String args[])throws MalFormedURLException
  {
	InetAddress ia=InetAddress.getLocalHost();
	//System.out.println(ia.getPort());
	System.out.println(ia);
	ia=InetAddress.getByName("osborne.com");
	System.out.println(ia);
	InetAddress SW[]=InetAddress.getAllByName("www.nba.com");
	for(int i=0;i<SW.length;i++)
	System.out.println(SW[i]);
  }
}
