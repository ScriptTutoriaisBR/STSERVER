Public Class Sobre

    Private Sub Sobre_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.Label1.Text = My.Application.Info.ProductName
        Me.Label2.Text = My.Application.Info.Copyright
        Me.Label3.Text = My.Application.Info.CompanyName
    End Sub
End Class