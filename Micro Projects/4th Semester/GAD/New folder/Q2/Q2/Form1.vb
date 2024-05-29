Public Class Form1
    Dim i, j, r As Integer
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        i = InputBox("Enter first value:")
        j = InputBox("Enter second value:")
        r = Val(i) + Val(j)
        MsgBox("Addition:" & r)

    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        i = InputBox("Enter first value:")
        j = InputBox("Enter second value:")
        r = Val(i) - Val(j)
        MsgBox("Subtraction:" & r)
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        i = InputBox("Enter first value:")
        j = InputBox("Enter second value:")
        r = Val(i) * Val(j)
        MsgBox("Multiplication:" & r)
    End Sub

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        i = InputBox("Enter first value:")
        j = InputBox("Enter second value:")
        r = Val(i) / Val(j)
        MsgBox("Division:" & r)
    End Sub
End Class
