//client side
import java.net.*;
import java.io.*;
class exp12_11_4_1
{
  public static void main(String args[])throws IOException,UnknownHostException
  {
	Socket s=new Socket("localhost",1234);
	
	InputStream in=s.getInputStream();
	OutputStream out=s.getOutputStream();
	DataInputStream din=new DataInputStream(in);
	DataOutputStream dout=new DataOutputStream(out);
	
	BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
	
	System.out.println("Enter the Password:");
	String pwd=br.readLine();
	dout.writeUTF(pwd);

	String msg=din.readUTF();
	System.out.println(msg);
	s.close();
  }
}
	