import java.sql.*;
class exp13_11_3
{
  public static void main(String args[])
  {
    try
    {
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
	Connection con=DriverManager.getConnection("jdbc:odbc:mydsn2");
	Statement stmt=con.createStatement();
	String sql="update product set name='Computer' where name='TV'";
	int x= stmt.executeUpdate(sql);
	System.out.println("Record Updated");
	stmt.close();
	con.close();
    }
    catch(Exception e)
    {
	System.out.println("Error in connection");
    }
  }
}