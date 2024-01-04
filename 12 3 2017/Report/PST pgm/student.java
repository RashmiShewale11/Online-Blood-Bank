import java.sql.*;
class exp13_11_2
{
  public static void main(String args[])
  {
    try
    {
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
	Connection con=DriverManager.getConnection("jdbc:odbc:mydsn1");
	Statement stmt=con.createStatement();
	String sql="select * from student where percentage>70";
	ResultSet rs= stmt.executeQuery(sql);
	System.out.println("Rollno\tName\tPercentage");
	while(rs.next())
	{
		System.out.println(rs.getString("rollno")+"\t"+rs.getString("name")+"\t"+rs.getString("percentage"));
	}
	rs.close();
	stmt.close();
	con.close();
    }
    catch(Exception e)
    {
	System.out.println("Error in connection");
    }
  }
}