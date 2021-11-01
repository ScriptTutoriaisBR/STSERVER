Imports System.Net
Public Class Main

    Private Sub Main_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim Cliente As New WebClient
        Try
            Dim Retorna As String = Cliente.DownloadString("https://pastebin.com/raw/GgSpbijZ")
            If (Retorna = Application.ProductVersion) = False Then
                MsgBox("Uma nova atualização está disponivel! Faça beckup de seus arquivos e instale a nova verão.", MsgBoxStyle.Information, "Atualização")
                Process.Start("https://lumatechappsegames.blogspot.com/2020/05/st-server-servidor-apache.html")
                Me.Close()
            End If
        Catch ex As Exception

        End Try
        'Mostrando a versão
        Me.versao.Text = String.Format("v{0}", My.Application.Info.Version.ToString)
        'title do app
        Me.Text = "ST SERVER - " + String.Format("v{0}", My.Application.Info.Version.ToString) + " [" + My.Application.Info.CompanyName + "]"
        Button4.Enabled = False
        Button5.Enabled = False
        Button6.Enabled = False
        Button17.Hide()
        Button19.Hide()
        'pids
        Label8.Text = "Uknow"
        Label9.Text = "Uknow"
        Label14.Text = "Uknow"
        Label15.Text = "Uknow"
        Label7.Text = "Unknow"
        Label13.Text = "Uknow"

        'Portas
        Label10.Text = ""
        Label11.Text = ""
        Label12.Text = "Uknow"
    End Sub

    Private Sub Button18_Click(sender As Object, e As EventArgs) Handles Button18.Click
        Me.Close()
    End Sub

    Private Sub BTNSobre_Click(sender As Object, e As EventArgs) Handles BTNSobre.Click
        Sobre.ShowDialog()
    End Sub

    Private Sub Button16_Click(sender As Object, e As EventArgs) Handles Button16.Click
        Process.Start("Explorer", "C:\server")
    End Sub

    Private Sub Button15_Click(sender As Object, e As EventArgs) Handles Button15.Click
        Process.Start("Explorer", "stserver_shell.bat")
    End Sub

    Private Sub Button14_Click(sender As Object, e As EventArgs) Handles Button14.Click
        Process.Start("Explorer", "stserver_netstat.bat")
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim startInfo As New ProcessStartInfo("apache_start.bat")
        startInfo.WindowStyle = ProcessWindowStyle.Hidden
        Button1.Hide()
        Button4.Enabled = True
        Button17.Show()
        Label10.Text = "80, 443"
        Process.Start(startInfo)
        'Process.Start("Explorer", "apache\bin\httpd.exe")
    End Sub

    Private Sub Button17_Click(sender As Object, e As EventArgs) Handles Button17.Click
        Dim startInfo As New ProcessStartInfo("apache_stop.bat")
        startInfo.WindowStyle = ProcessWindowStyle.Hidden
        Button1.Show()
        Button4.Enabled = False
        Button17.Hide()
        Label10.Text = ""
        Process.Start(startInfo)
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        Dim startInfo As New ProcessStartInfo("mysql_start.bat")
        startInfo.WindowStyle = ProcessWindowStyle.Hidden
        Button2.Hide()
        Button5.Enabled = True
        Button19.Show()
        Label11.Text = "3306"
        Process.Start(startInfo)
    End Sub

    Private Sub Button19_Click(sender As Object, e As EventArgs) Handles Button19.Click
        Dim startInfo As New ProcessStartInfo("mysql_stop.bat")
        startInfo.WindowStyle = ProcessWindowStyle.Hidden
        Button2.Show()
        Button5.Enabled = False
        Button19.Hide()
        Label11.Text = ""
        Process.Start(startInfo)
    End Sub

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        Process.Start("http://localhost/")
    End Sub

    Private Sub Button5_Click(sender As Object, e As EventArgs) Handles Button5.Click
        Process.Start("http://localhost/phpmyadmin/")
    End Sub

    Private Sub Button7_Click(sender As Object, e As EventArgs) Handles Button7.Click
        Config_php.ShowDialog()
    End Sub
End Class
