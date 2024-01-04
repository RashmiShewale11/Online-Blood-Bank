//server side 
import java.net.*;
import java.io.*;
public class exp12_11_4_2
{
  public static void main(String args[])throws IOException,UnknownHostException
  {
	ServerSocket ss=new ServerSocket(1234);
	Socket s=ss.accept();
	
	InputStream in=s.getInputStream();
	OutputStream out=s.getOutputStream();
	DataInputStream din=new DataInputStream(in);
	DataOutputStream dout=new DataOutputStream(out);
	
	String msg;
	String pwd=din.readUTF();
	if(pwd.equals("msbte"))
	  msg="Valid";
	else
	  msg="Invalid";
	dout.writeUTF(msg);

	s.close();
	ss.close();
  }
}
	 
	