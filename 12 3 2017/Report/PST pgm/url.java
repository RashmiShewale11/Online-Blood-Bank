import java.net.*;
class exp11_7
{
  public static void main(String args[])throws MalformedURLException
  {
	URL netAddress=new URL("http://www.sun.com//index.html");
	System.out.println("Protocol:"+netAddress.getProtocol());
	System.out.println("Port:"+netAddress.getPort());
	System.out.println("Host:"+netAddress.getHost());
	System.out.println("File:"+netAddress.getFile());
  }
}
