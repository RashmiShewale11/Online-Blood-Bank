import java.net.*;
class exp10_11_1
{
  public static void main(String args[])throws UnknownHostException
  {
	InetAddress ia=InetAddress.getLocalHost();
	System.out.println("IP Address of Local Machine:"+ia.getHostAddress());
	System.out.println("Host Name of Local Machine:"+ia.getHostName());	
  }
}
	