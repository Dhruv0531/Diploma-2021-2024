Public Class Form1

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        Dim div As Integer
        div = Val(TextBox1.Text) / Val(TextBox2.Text)
        MsgBox("Division:" & div)
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim add As Integer
        add = Val(TextBox1.Text) + Val(TextBox2.Text)
        MsgBox("Addition:" & add)
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        Dim minus As Integer
        minus = Val(TextBox1.Text) - Val(TextBox2.Text)
        MsgBox("Subtraction:" & minus)
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        Dim mul As Integer
        mul = Val(TextBox1.Text) * Val(TextBox2.Text)
        MsgBox("Multiplication:" & mul)
    End Sub
End Class
