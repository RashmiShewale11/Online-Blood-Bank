import java.sql.*;
class exp13_11_1
{
  public static void main(String args[])
  {
    try
    {
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
	Connection con=DriverManager.getConnection("jdbc:odbc:mydsn");
	Statement stmt=con.createStatement();
	String sql="select * from emp";
	ResultSet rs= stmt.executeQuery(sql);
	System.out.println("Emp_id\tEmp-Name  Emp_salary");
	while(rs.next())
	{
		System.out.println(rs.getString("emp_id")+"\t"+rs.getString("emp_name")+"\t"+rs.getString("emp_salary"));
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