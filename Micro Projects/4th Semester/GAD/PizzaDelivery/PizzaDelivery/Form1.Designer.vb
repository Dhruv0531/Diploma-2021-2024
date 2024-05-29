<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.Panel1 = New System.Windows.Forms.Panel()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.txtTel = New System.Windows.Forms.TextBox()
        Me.cmdContinue = New System.Windows.Forms.Button()
        Me.pnlLeft = New System.Windows.Forms.Panel()
        Me.txtOrder = New System.Windows.Forms.TextBox()
        Me.cmdSave = New System.Windows.Forms.Button()
        Me.txtPostcode = New System.Windows.Forms.TextBox()
        Me.txtTown = New System.Windows.Forms.TextBox()
        Me.txtAddress02 = New System.Windows.Forms.TextBox()
        Me.txtAddress01 = New System.Windows.Forms.TextBox()
        Me.txtSurname = New System.Windows.Forms.TextBox()
        Me.txtForename = New System.Windows.Forms.TextBox()
        Me.Label9 = New System.Windows.Forms.Label()
        Me.Label8 = New System.Windows.Forms.Label()
        Me.Label7 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.pnlRight = New System.Windows.Forms.Panel()
        Me.cmdClear = New System.Windows.Forms.Button()
        Me.cmdPrint = New System.Windows.Forms.Button()
        Me.lblOderTotal = New System.Windows.Forms.Label()
        Me.lblDeliveryCharge = New System.Windows.Forms.Label()
        Me.lblOderValue = New System.Windows.Forms.Label()
        Me.pnlDrinks = New System.Windows.Forms.Panel()
        Me.nudDrk03 = New System.Windows.Forms.NumericUpDown()
        Me.nudDrk02 = New System.Windows.Forms.NumericUpDown()
        Me.nudDrk01 = New System.Windows.Forms.NumericUpDown()
        Me.nudDrk00 = New System.Windows.Forms.NumericUpDown()
        Me.Label18 = New System.Windows.Forms.Label()
        Me.Label17 = New System.Windows.Forms.Label()
        Me.Label16 = New System.Windows.Forms.Label()
        Me.Label15 = New System.Windows.Forms.Label()
        Me.Label14 = New System.Windows.Forms.Label()
        Me.Label13 = New System.Windows.Forms.Label()
        Me.cmdAddItem = New System.Windows.Forms.Button()
        Me.pnlExtras = New System.Windows.Forms.Panel()
        Me.chkExt03 = New System.Windows.Forms.CheckBox()
        Me.chkExt02 = New System.Windows.Forms.CheckBox()
        Me.chkExt01 = New System.Windows.Forms.CheckBox()
        Me.chkExt00 = New System.Windows.Forms.CheckBox()
        Me.Label12 = New System.Windows.Forms.Label()
        Me.pnlBase = New System.Windows.Forms.Panel()
        Me.radBas02 = New System.Windows.Forms.RadioButton()
        Me.radBas01 = New System.Windows.Forms.RadioButton()
        Me.radBas00 = New System.Windows.Forms.RadioButton()
        Me.Label11 = New System.Windows.Forms.Label()
        Me.pnlTopping = New System.Windows.Forms.Panel()
        Me.radTop02 = New System.Windows.Forms.RadioButton()
        Me.radTop01 = New System.Windows.Forms.RadioButton()
        Me.radTop00 = New System.Windows.Forms.RadioButton()
        Me.Label10 = New System.Windows.Forms.Label()
        Me.Label21 = New System.Windows.Forms.Label()
        Me.Label20 = New System.Windows.Forms.Label()
        Me.Label19 = New System.Windows.Forms.Label()
        Me.prtContinuation = New System.Drawing.Printing.PrintDocument()
        Me.prtDeliveryNote = New System.Drawing.Printing.PrintDocument()
        Me.Panel1.SuspendLayout()
        Me.pnlLeft.SuspendLayout()
        Me.pnlRight.SuspendLayout()
        Me.pnlDrinks.SuspendLayout()
        CType(Me.nudDrk03, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.nudDrk02, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.nudDrk01, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.nudDrk00, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.pnlExtras.SuspendLayout()
        Me.pnlBase.SuspendLayout()
        Me.pnlTopping.SuspendLayout()
        Me.SuspendLayout()
        '
        'Panel1
        '
        Me.Panel1.BackColor = System.Drawing.Color.FromArgb(CType(CType(255, Byte), Integer), CType(CType(128, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Panel1.Controls.Add(Me.Label1)
        Me.Panel1.Location = New System.Drawing.Point(-1, 2)
        Me.Panel1.Name = "Panel1"
        Me.Panel1.Size = New System.Drawing.Size(1267, 65)
        Me.Panel1.TabIndex = 0
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Font = New System.Drawing.Font("Microsoft Himalaya", 45.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.Location = New System.Drawing.Point(233, 10)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(650, 60)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "PIZZA DELIVERY-ORDER FORM"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label2.Location = New System.Drawing.Point(371, 85)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(120, 18)
        Me.Label2.TabIndex = 1
        Me.Label2.Text = "TelePhone No."
        '
        'txtTel
        '
        Me.txtTel.Location = New System.Drawing.Point(520, 86)
        Me.txtTel.Name = "txtTel"
        Me.txtTel.Size = New System.Drawing.Size(232, 20)
        Me.txtTel.TabIndex = 2
        '
        'cmdContinue
        '
        Me.cmdContinue.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmdContinue.ForeColor = System.Drawing.Color.FromArgb(CType(CType(255, Byte), Integer), CType(CType(128, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.cmdContinue.Location = New System.Drawing.Point(781, 75)
        Me.cmdContinue.Name = "cmdContinue"
        Me.cmdContinue.Size = New System.Drawing.Size(141, 35)
        Me.cmdContinue.TabIndex = 3
        Me.cmdContinue.Text = "Continue"
        Me.cmdContinue.UseVisualStyleBackColor = True
        '
        'pnlLeft
        '
        Me.pnlLeft.BackColor = System.Drawing.Color.MidnightBlue
        Me.pnlLeft.Controls.Add(Me.txtOrder)
        Me.pnlLeft.Controls.Add(Me.cmdSave)
        Me.pnlLeft.Controls.Add(Me.txtPostcode)
        Me.pnlLeft.Controls.Add(Me.txtTown)
        Me.pnlLeft.Controls.Add(Me.txtAddress02)
        Me.pnlLeft.Controls.Add(Me.txtAddress01)
        Me.pnlLeft.Controls.Add(Me.txtSurname)
        Me.pnlLeft.Controls.Add(Me.txtForename)
        Me.pnlLeft.Controls.Add(Me.Label9)
        Me.pnlLeft.Controls.Add(Me.Label8)
        Me.pnlLeft.Controls.Add(Me.Label7)
        Me.pnlLeft.Controls.Add(Me.Label6)
        Me.pnlLeft.Controls.Add(Me.Label5)
        Me.pnlLeft.Controls.Add(Me.Label4)
        Me.pnlLeft.Controls.Add(Me.Label3)
        Me.pnlLeft.Location = New System.Drawing.Point(195, 129)
        Me.pnlLeft.Name = "pnlLeft"
        Me.pnlLeft.Size = New System.Drawing.Size(367, 550)
        Me.pnlLeft.TabIndex = 4
        '
        'txtOrder
        '
        Me.txtOrder.Location = New System.Drawing.Point(3, 334)
        Me.txtOrder.Multiline = True
        Me.txtOrder.Name = "txtOrder"
        Me.txtOrder.ScrollBars = System.Windows.Forms.ScrollBars.Vertical
        Me.txtOrder.Size = New System.Drawing.Size(361, 212)
        Me.txtOrder.TabIndex = 3
        '
        'cmdSave
        '
        Me.cmdSave.BackColor = System.Drawing.Color.Yellow
        Me.cmdSave.Font = New System.Drawing.Font("Microsoft Sans Serif", 13.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmdSave.ForeColor = System.Drawing.Color.Black
        Me.cmdSave.Location = New System.Drawing.Point(155, 249)
        Me.cmdSave.Name = "cmdSave"
        Me.cmdSave.Size = New System.Drawing.Size(155, 38)
        Me.cmdSave.TabIndex = 2
        Me.cmdSave.Text = "Save Customer"
        Me.cmdSave.UseVisualStyleBackColor = False
        '
        'txtPostcode
        '
        Me.txtPostcode.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txtPostcode.Location = New System.Drawing.Point(103, 207)
        Me.txtPostcode.Name = "txtPostcode"
        Me.txtPostcode.Size = New System.Drawing.Size(230, 24)
        Me.txtPostcode.TabIndex = 1
        '
        'txtTown
        '
        Me.txtTown.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txtTown.Location = New System.Drawing.Point(103, 171)
        Me.txtTown.Name = "txtTown"
        Me.txtTown.Size = New System.Drawing.Size(230, 24)
        Me.txtTown.TabIndex = 1
        '
        'txtAddress02
        '
        Me.txtAddress02.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txtAddress02.Location = New System.Drawing.Point(104, 130)
        Me.txtAddress02.Name = "txtAddress02"
        Me.txtAddress02.Size = New System.Drawing.Size(229, 24)
        Me.txtAddress02.TabIndex = 1
        '
        'txtAddress01
        '
        Me.txtAddress01.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txtAddress01.Location = New System.Drawing.Point(104, 85)
        Me.txtAddress01.Name = "txtAddress01"
        Me.txtAddress01.Size = New System.Drawing.Size(229, 24)
        Me.txtAddress01.TabIndex = 1
        '
        'txtSurname
        '
        Me.txtSurname.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txtSurname.Location = New System.Drawing.Point(108, 46)
        Me.txtSurname.Name = "txtSurname"
        Me.txtSurname.Size = New System.Drawing.Size(225, 24)
        Me.txtSurname.TabIndex = 1
        '
        'txtForename
        '
        Me.txtForename.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txtForename.Location = New System.Drawing.Point(109, 9)
        Me.txtForename.Name = "txtForename"
        Me.txtForename.Size = New System.Drawing.Size(224, 24)
        Me.txtForename.TabIndex = 1
        '
        'Label9
        '
        Me.Label9.AutoSize = True
        Me.Label9.Font = New System.Drawing.Font("Microsoft Sans Serif", 14.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label9.ForeColor = System.Drawing.Color.DarkOrange
        Me.Label9.Location = New System.Drawing.Point(3, 300)
        Me.Label9.Name = "Label9"
        Me.Label9.Size = New System.Drawing.Size(132, 24)
        Me.Label9.TabIndex = 0
        Me.Label9.Text = "Order Details"
        '
        'Label8
        '
        Me.Label8.AutoSize = True
        Me.Label8.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label8.ForeColor = System.Drawing.Color.White
        Me.Label8.Location = New System.Drawing.Point(16, 210)
        Me.Label8.Name = "Label8"
        Me.Label8.Size = New System.Drawing.Size(81, 17)
        Me.Label8.TabIndex = 0
        Me.Label8.Text = "PIN CODE"
        '
        'Label7
        '
        Me.Label7.AutoSize = True
        Me.Label7.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label7.ForeColor = System.Drawing.Color.White
        Me.Label7.Location = New System.Drawing.Point(17, 176)
        Me.Label7.Name = "Label7"
        Me.Label7.Size = New System.Drawing.Size(35, 17)
        Me.Label7.TabIndex = 0
        Me.Label7.Text = "City"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label6.ForeColor = System.Drawing.Color.White
        Me.Label6.Location = New System.Drawing.Point(17, 131)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(81, 17)
        Me.Label6.TabIndex = 0
        Me.Label6.Text = "Address 2"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label5.ForeColor = System.Drawing.Color.White
        Me.Label5.Location = New System.Drawing.Point(16, 88)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(81, 17)
        Me.Label5.TabIndex = 0
        Me.Label5.Text = "Address 1"
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label4.ForeColor = System.Drawing.Color.White
        Me.Label4.Location = New System.Drawing.Point(17, 49)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(85, 17)
        Me.Label4.TabIndex = 0
        Me.Label4.Text = "Last Name"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label3.ForeColor = System.Drawing.Color.White
        Me.Label3.Location = New System.Drawing.Point(17, 14)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(86, 17)
        Me.Label3.TabIndex = 0
        Me.Label3.Text = "First Name"
        '
        'pnlRight
        '
        Me.pnlRight.BackColor = System.Drawing.SystemColors.ActiveCaption
        Me.pnlRight.Controls.Add(Me.cmdClear)
        Me.pnlRight.Controls.Add(Me.cmdPrint)
        Me.pnlRight.Controls.Add(Me.lblOderTotal)
        Me.pnlRight.Controls.Add(Me.lblDeliveryCharge)
        Me.pnlRight.Controls.Add(Me.lblOderValue)
        Me.pnlRight.Controls.Add(Me.pnlDrinks)
        Me.pnlRight.Controls.Add(Me.cmdAddItem)
        Me.pnlRight.Controls.Add(Me.pnlExtras)
        Me.pnlRight.Controls.Add(Me.pnlBase)
        Me.pnlRight.Controls.Add(Me.pnlTopping)
        Me.pnlRight.Controls.Add(Me.Label21)
        Me.pnlRight.Controls.Add(Me.Label20)
        Me.pnlRight.Controls.Add(Me.Label19)
        Me.pnlRight.Location = New System.Drawing.Point(617, 129)
        Me.pnlRight.Name = "pnlRight"
        Me.pnlRight.Size = New System.Drawing.Size(569, 543)
        Me.pnlRight.TabIndex = 5
        '
        'cmdClear
        '
        Me.cmdClear.Font = New System.Drawing.Font("Microsoft Sans Serif", 14.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmdClear.Location = New System.Drawing.Point(35, 504)
        Me.cmdClear.Name = "cmdClear"
        Me.cmdClear.Size = New System.Drawing.Size(124, 33)
        Me.cmdClear.TabIndex = 6
        Me.cmdClear.Text = "Clear"
        Me.cmdClear.UseVisualStyleBackColor = True
        '
        'cmdPrint
        '
        Me.cmdPrint.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmdPrint.ForeColor = System.Drawing.SystemColors.HotTrack
        Me.cmdPrint.Location = New System.Drawing.Point(28, 460)
        Me.cmdPrint.Name = "cmdPrint"
        Me.cmdPrint.Size = New System.Drawing.Size(168, 35)
        Me.cmdPrint.TabIndex = 5
        Me.cmdPrint.Text = "Print Delivery Note"
        Me.cmdPrint.UseVisualStyleBackColor = True
        '
        'lblOderTotal
        '
        Me.lblOderTotal.AutoSize = True
        Me.lblOderTotal.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblOderTotal.Location = New System.Drawing.Point(413, 508)
        Me.lblOderTotal.Name = "lblOderTotal"
        Me.lblOderTotal.Size = New System.Drawing.Size(89, 25)
        Me.lblOderTotal.TabIndex = 4
        Me.lblOderTotal.Text = "Label22"
        '
        'lblDeliveryCharge
        '
        Me.lblDeliveryCharge.AutoSize = True
        Me.lblDeliveryCharge.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblDeliveryCharge.Location = New System.Drawing.Point(413, 474)
        Me.lblDeliveryCharge.Name = "lblDeliveryCharge"
        Me.lblDeliveryCharge.Size = New System.Drawing.Size(89, 25)
        Me.lblDeliveryCharge.TabIndex = 4
        Me.lblDeliveryCharge.Text = "Label22"
        '
        'lblOderValue
        '
        Me.lblOderValue.AutoSize = True
        Me.lblOderValue.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblOderValue.Location = New System.Drawing.Point(413, 438)
        Me.lblOderValue.Name = "lblOderValue"
        Me.lblOderValue.Size = New System.Drawing.Size(89, 25)
        Me.lblOderValue.TabIndex = 4
        Me.lblOderValue.Text = "Label22"
        '
        'pnlDrinks
        '
        Me.pnlDrinks.BackColor = System.Drawing.SystemColors.ControlDarkDark
        Me.pnlDrinks.Controls.Add(Me.nudDrk03)
        Me.pnlDrinks.Controls.Add(Me.nudDrk02)
        Me.pnlDrinks.Controls.Add(Me.nudDrk01)
        Me.pnlDrinks.Controls.Add(Me.nudDrk00)
        Me.pnlDrinks.Controls.Add(Me.Label18)
        Me.pnlDrinks.Controls.Add(Me.Label17)
        Me.pnlDrinks.Controls.Add(Me.Label16)
        Me.pnlDrinks.Controls.Add(Me.Label15)
        Me.pnlDrinks.Controls.Add(Me.Label14)
        Me.pnlDrinks.Controls.Add(Me.Label13)
        Me.pnlDrinks.Location = New System.Drawing.Point(9, 268)
        Me.pnlDrinks.Name = "pnlDrinks"
        Me.pnlDrinks.Size = New System.Drawing.Size(256, 186)
        Me.pnlDrinks.TabIndex = 3
        '
        'nudDrk03
        '
        Me.nudDrk03.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.nudDrk03.ForeColor = System.Drawing.Color.Fuchsia
        Me.nudDrk03.Location = New System.Drawing.Point(201, 138)
        Me.nudDrk03.Name = "nudDrk03"
        Me.nudDrk03.Size = New System.Drawing.Size(51, 23)
        Me.nudDrk03.TabIndex = 2
        '
        'nudDrk02
        '
        Me.nudDrk02.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.nudDrk02.ForeColor = System.Drawing.Color.Fuchsia
        Me.nudDrk02.Location = New System.Drawing.Point(199, 102)
        Me.nudDrk02.Name = "nudDrk02"
        Me.nudDrk02.Size = New System.Drawing.Size(51, 23)
        Me.nudDrk02.TabIndex = 2
        '
        'nudDrk01
        '
        Me.nudDrk01.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.nudDrk01.ForeColor = System.Drawing.Color.Fuchsia
        Me.nudDrk01.Location = New System.Drawing.Point(199, 69)
        Me.nudDrk01.Name = "nudDrk01"
        Me.nudDrk01.Size = New System.Drawing.Size(51, 23)
        Me.nudDrk01.TabIndex = 2
        '
        'nudDrk00
        '
        Me.nudDrk00.Font = New System.Drawing.Font("Microsoft Sans Serif", 10.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.nudDrk00.ForeColor = System.Drawing.Color.Fuchsia
        Me.nudDrk00.Location = New System.Drawing.Point(199, 37)
        Me.nudDrk00.Name = "nudDrk00"
        Me.nudDrk00.Size = New System.Drawing.Size(51, 23)
        Me.nudDrk00.TabIndex = 2
        '
        'Label18
        '
        Me.Label18.AutoSize = True
        Me.Label18.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label18.ForeColor = System.Drawing.Color.White
        Me.Label18.Location = New System.Drawing.Point(30, 143)
        Me.Label18.Name = "Label18"
        Me.Label18.Size = New System.Drawing.Size(113, 18)
        Me.Label18.TabIndex = 1
        Me.Label18.Text = "Mineral Water"
        '
        'Label17
        '
        Me.Label17.AutoSize = True
        Me.Label17.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label17.ForeColor = System.Drawing.Color.White
        Me.Label17.Location = New System.Drawing.Point(32, 102)
        Me.Label17.Name = "Label17"
        Me.Label17.Size = New System.Drawing.Size(63, 18)
        Me.Label17.TabIndex = 1
        Me.Label17.Text = "Orange"
        '
        'Label16
        '
        Me.Label16.AutoSize = True
        Me.Label16.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label16.ForeColor = System.Drawing.Color.White
        Me.Label16.Location = New System.Drawing.Point(32, 69)
        Me.Label16.Name = "Label16"
        Me.Label16.Size = New System.Drawing.Size(86, 18)
        Me.Label16.TabIndex = 1
        Me.Label16.Text = "Lemonade"
        '
        'Label15
        '
        Me.Label15.AutoSize = True
        Me.Label15.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label15.ForeColor = System.Drawing.Color.White
        Me.Label15.Location = New System.Drawing.Point(32, 42)
        Me.Label15.Name = "Label15"
        Me.Label15.Size = New System.Drawing.Size(43, 18)
        Me.Label15.TabIndex = 1
        Me.Label15.Text = "Cola"
        '
        'Label14
        '
        Me.Label14.AutoSize = True
        Me.Label14.Font = New System.Drawing.Font("Microsoft Sans Serif", 14.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label14.ForeColor = System.Drawing.Color.FromArgb(CType(CType(255, Byte), Integer), CType(CType(128, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Label14.Location = New System.Drawing.Point(197, 2)
        Me.Label14.Name = "Label14"
        Me.Label14.Size = New System.Drawing.Size(53, 24)
        Me.Label14.TabIndex = 0
        Me.Label14.Text = "Qnty"
        '
        'Label13
        '
        Me.Label13.AutoSize = True
        Me.Label13.Font = New System.Drawing.Font("Microsoft Sans Serif", 14.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label13.ForeColor = System.Drawing.Color.FromArgb(CType(CType(255, Byte), Integer), CType(CType(128, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Label13.Location = New System.Drawing.Point(18, 2)
        Me.Label13.Name = "Label13"
        Me.Label13.Size = New System.Drawing.Size(68, 24)
        Me.Label13.TabIndex = 0
        Me.Label13.Text = "Drinks"
        '
        'cmdAddItem
        '
        Me.cmdAddItem.BackColor = System.Drawing.Color.DarkGreen
        Me.cmdAddItem.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmdAddItem.ForeColor = System.Drawing.Color.White
        Me.cmdAddItem.Location = New System.Drawing.Point(181, 192)
        Me.cmdAddItem.Name = "cmdAddItem"
        Me.cmdAddItem.Size = New System.Drawing.Size(141, 42)
        Me.cmdAddItem.TabIndex = 2
        Me.cmdAddItem.Text = "Add Item"
        Me.cmdAddItem.UseVisualStyleBackColor = False
        '
        'pnlExtras
        '
        Me.pnlExtras.BackColor = System.Drawing.Color.Yellow
        Me.pnlExtras.Controls.Add(Me.chkExt03)
        Me.pnlExtras.Controls.Add(Me.chkExt02)
        Me.pnlExtras.Controls.Add(Me.chkExt01)
        Me.pnlExtras.Controls.Add(Me.chkExt00)
        Me.pnlExtras.Controls.Add(Me.Label12)
        Me.pnlExtras.Location = New System.Drawing.Point(354, 18)
        Me.pnlExtras.Name = "pnlExtras"
        Me.pnlExtras.Size = New System.Drawing.Size(161, 169)
        Me.pnlExtras.TabIndex = 1
        '
        'chkExt03
        '
        Me.chkExt03.AutoSize = True
        Me.chkExt03.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.chkExt03.Location = New System.Drawing.Point(9, 125)
        Me.chkExt03.Name = "chkExt03"
        Me.chkExt03.Size = New System.Drawing.Size(89, 24)
        Me.chkExt03.TabIndex = 3
        Me.chkExt03.Text = "Cheese"
        Me.chkExt03.UseVisualStyleBackColor = True
        '
        'chkExt02
        '
        Me.chkExt02.AutoSize = True
        Me.chkExt02.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.chkExt02.Location = New System.Drawing.Point(9, 95)
        Me.chkExt02.Name = "chkExt02"
        Me.chkExt02.Size = New System.Drawing.Size(110, 24)
        Me.chkExt02.TabIndex = 3
        Me.chkExt02.Text = "Anchovies"
        Me.chkExt02.UseVisualStyleBackColor = True
        '
        'chkExt01
        '
        Me.chkExt01.AutoSize = True
        Me.chkExt01.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.chkExt01.Location = New System.Drawing.Point(9, 70)
        Me.chkExt01.Name = "chkExt01"
        Me.chkExt01.Size = New System.Drawing.Size(149, 24)
        Me.chkExt01.TabIndex = 2
        Me.chkExt01.Text = "Green Peppers"
        Me.chkExt01.UseVisualStyleBackColor = True
        '
        'chkExt00
        '
        Me.chkExt00.AutoSize = True
        Me.chkExt00.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.chkExt00.Location = New System.Drawing.Point(9, 40)
        Me.chkExt00.Name = "chkExt00"
        Me.chkExt00.Size = New System.Drawing.Size(120, 24)
        Me.chkExt00.TabIndex = 1
        Me.chkExt00.Text = "Mushrooms"
        Me.chkExt00.UseVisualStyleBackColor = True
        '
        'Label12
        '
        Me.Label12.AutoSize = True
        Me.Label12.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label12.ForeColor = System.Drawing.Color.Red
        Me.Label12.Location = New System.Drawing.Point(50, 2)
        Me.Label12.Name = "Label12"
        Me.Label12.Size = New System.Drawing.Size(73, 25)
        Me.Label12.TabIndex = 0
        Me.Label12.Text = "Extras"
        '
        'pnlBase
        '
        Me.pnlBase.BackColor = System.Drawing.Color.MidnightBlue
        Me.pnlBase.Controls.Add(Me.radBas02)
        Me.pnlBase.Controls.Add(Me.radBas01)
        Me.pnlBase.Controls.Add(Me.radBas00)
        Me.pnlBase.Controls.Add(Me.Label11)
        Me.pnlBase.Location = New System.Drawing.Point(181, 18)
        Me.pnlBase.Name = "pnlBase"
        Me.pnlBase.Size = New System.Drawing.Size(161, 169)
        Me.pnlBase.TabIndex = 1
        '
        'radBas02
        '
        Me.radBas02.AutoSize = True
        Me.radBas02.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.radBas02.ForeColor = System.Drawing.Color.White
        Me.radBas02.Location = New System.Drawing.Point(15, 118)
        Me.radBas02.Name = "radBas02"
        Me.radBas02.Size = New System.Drawing.Size(112, 24)
        Me.radBas02.TabIndex = 1
        Me.radBas02.TabStop = True
        Me.radBas02.Text = "35 cm/14 in."
        Me.radBas02.UseVisualStyleBackColor = True
        '
        'radBas01
        '
        Me.radBas01.AutoSize = True
        Me.radBas01.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.radBas01.ForeColor = System.Drawing.Color.White
        Me.radBas01.Location = New System.Drawing.Point(15, 77)
        Me.radBas01.Name = "radBas01"
        Me.radBas01.Size = New System.Drawing.Size(112, 24)
        Me.radBas01.TabIndex = 1
        Me.radBas01.TabStop = True
        Me.radBas01.Text = "30 cm/12 in."
        Me.radBas01.UseVisualStyleBackColor = True
        '
        'radBas00
        '
        Me.radBas00.AutoSize = True
        Me.radBas00.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.radBas00.ForeColor = System.Drawing.Color.White
        Me.radBas00.Location = New System.Drawing.Point(15, 40)
        Me.radBas00.Name = "radBas00"
        Me.radBas00.Size = New System.Drawing.Size(112, 24)
        Me.radBas00.TabIndex = 1
        Me.radBas00.TabStop = True
        Me.radBas00.Text = "25 cm/10 in."
        Me.radBas00.UseVisualStyleBackColor = True
        '
        'Label11
        '
        Me.Label11.AutoSize = True
        Me.Label11.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label11.ForeColor = System.Drawing.Color.Red
        Me.Label11.Location = New System.Drawing.Point(42, 2)
        Me.Label11.Name = "Label11"
        Me.Label11.Size = New System.Drawing.Size(61, 25)
        Me.Label11.TabIndex = 0
        Me.Label11.Text = "Base"
        '
        'pnlTopping
        '
        Me.pnlTopping.BackColor = System.Drawing.Color.SeaGreen
        Me.pnlTopping.Controls.Add(Me.radTop02)
        Me.pnlTopping.Controls.Add(Me.radTop01)
        Me.pnlTopping.Controls.Add(Me.radTop00)
        Me.pnlTopping.Controls.Add(Me.Label10)
        Me.pnlTopping.Location = New System.Drawing.Point(9, 18)
        Me.pnlTopping.Name = "pnlTopping"
        Me.pnlTopping.Size = New System.Drawing.Size(161, 169)
        Me.pnlTopping.TabIndex = 0
        '
        'radTop02
        '
        Me.radTop02.AutoSize = True
        Me.radTop02.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.radTop02.ForeColor = System.Drawing.Color.White
        Me.radTop02.Location = New System.Drawing.Point(23, 118)
        Me.radTop02.Name = "radTop02"
        Me.radTop02.Size = New System.Drawing.Size(108, 24)
        Me.radTop02.TabIndex = 0
        Me.radTop02.TabStop = True
        Me.radTop02.Text = "Meat Feast"
        Me.radTop02.UseVisualStyleBackColor = True
        '
        'radTop01
        '
        Me.radTop01.AutoSize = True
        Me.radTop01.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.radTop01.ForeColor = System.Drawing.Color.White
        Me.radTop01.Location = New System.Drawing.Point(23, 77)
        Me.radTop01.Name = "radTop01"
        Me.radTop01.Size = New System.Drawing.Size(127, 24)
        Me.radTop01.TabIndex = 0
        Me.radTop01.TabStop = True
        Me.radTop01.Text = "Four Seasons"
        Me.radTop01.UseVisualStyleBackColor = True
        '
        'radTop00
        '
        Me.radTop00.AutoSize = True
        Me.radTop00.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.radTop00.ForeColor = System.Drawing.Color.White
        Me.radTop00.Location = New System.Drawing.Point(23, 40)
        Me.radTop00.Name = "radTop00"
        Me.radTop00.Size = New System.Drawing.Size(103, 24)
        Me.radTop00.TabIndex = 0
        Me.radTop00.TabStop = True
        Me.radTop00.Text = "Margherita"
        Me.radTop00.UseVisualStyleBackColor = True
        '
        'Label10
        '
        Me.Label10.AutoSize = True
        Me.Label10.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.0!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label10.ForeColor = System.Drawing.Color.Red
        Me.Label10.Location = New System.Drawing.Point(35, 0)
        Me.Label10.Name = "Label10"
        Me.Label10.Size = New System.Drawing.Size(91, 25)
        Me.Label10.TabIndex = 0
        Me.Label10.Text = "Topping"
        '
        'Label21
        '
        Me.Label21.AutoSize = True
        Me.Label21.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label21.ForeColor = System.Drawing.Color.OrangeRed
        Me.Label21.Location = New System.Drawing.Point(280, 515)
        Me.Label21.Name = "Label21"
        Me.Label21.Size = New System.Drawing.Size(93, 18)
        Me.Label21.TabIndex = 0
        Me.Label21.Text = "Order Tatal"
        '
        'Label20
        '
        Me.Label20.AutoSize = True
        Me.Label20.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label20.ForeColor = System.Drawing.Color.OrangeRed
        Me.Label20.Location = New System.Drawing.Point(280, 481)
        Me.Label20.Name = "Label20"
        Me.Label20.Size = New System.Drawing.Size(127, 18)
        Me.Label20.TabIndex = 0
        Me.Label20.Text = "Delivery Charge"
        '
        'Label19
        '
        Me.Label19.AutoSize = True
        Me.Label19.Font = New System.Drawing.Font("Microsoft Sans Serif", 11.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label19.ForeColor = System.Drawing.Color.OrangeRed
        Me.Label19.Location = New System.Drawing.Point(280, 445)
        Me.Label19.Name = "Label19"
        Me.Label19.Size = New System.Drawing.Size(97, 18)
        Me.Label19.TabIndex = 0
        Me.Label19.Text = "Order Value"
        '
        'prtContinuation
        '
        '
        'prtDeliveryNote
        '
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(1264, 707)
        Me.Controls.Add(Me.pnlRight)
        Me.Controls.Add(Me.pnlLeft)
        Me.Controls.Add(Me.cmdContinue)
        Me.Controls.Add(Me.txtTel)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Panel1)
        Me.Name = "Form1"
        Me.Text = "CODER BABA PIZZA Delivery"
        Me.WindowState = System.Windows.Forms.FormWindowState.Maximized
        Me.Panel1.ResumeLayout(False)
        Me.Panel1.PerformLayout()
        Me.pnlLeft.ResumeLayout(False)
        Me.pnlLeft.PerformLayout()
        Me.pnlRight.ResumeLayout(False)
        Me.pnlRight.PerformLayout()
        Me.pnlDrinks.ResumeLayout(False)
        Me.pnlDrinks.PerformLayout()
        CType(Me.nudDrk03, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.nudDrk02, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.nudDrk01, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.nudDrk00, System.ComponentModel.ISupportInitialize).EndInit()
        Me.pnlExtras.ResumeLayout(False)
        Me.pnlExtras.PerformLayout()
        Me.pnlBase.ResumeLayout(False)
        Me.pnlBase.PerformLayout()
        Me.pnlTopping.ResumeLayout(False)
        Me.pnlTopping.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents Panel1 As System.Windows.Forms.Panel
    Friend WithEvents Label1 As System.Windows.Forms.Label
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents txtTel As System.Windows.Forms.TextBox
    Friend WithEvents cmdContinue As System.Windows.Forms.Button
    Friend WithEvents pnlLeft As System.Windows.Forms.Panel
    Friend WithEvents txtOrder As System.Windows.Forms.TextBox
    Friend WithEvents cmdSave As System.Windows.Forms.Button
    Friend WithEvents txtPostcode As System.Windows.Forms.TextBox
    Friend WithEvents txtTown As System.Windows.Forms.TextBox
    Friend WithEvents txtAddress02 As System.Windows.Forms.TextBox
    Friend WithEvents txtAddress01 As System.Windows.Forms.TextBox
    Friend WithEvents txtSurname As System.Windows.Forms.TextBox
    Friend WithEvents txtForename As System.Windows.Forms.TextBox
    Friend WithEvents Label9 As System.Windows.Forms.Label
    Friend WithEvents Label8 As System.Windows.Forms.Label
    Friend WithEvents Label7 As System.Windows.Forms.Label
    Friend WithEvents Label6 As System.Windows.Forms.Label
    Friend WithEvents Label5 As System.Windows.Forms.Label
    Friend WithEvents Label4 As System.Windows.Forms.Label
    Friend WithEvents Label3 As System.Windows.Forms.Label
    Friend WithEvents pnlRight As System.Windows.Forms.Panel
    Friend WithEvents pnlExtras As System.Windows.Forms.Panel
    Friend WithEvents pnlBase As System.Windows.Forms.Panel
    Friend WithEvents pnlTopping As System.Windows.Forms.Panel
    Friend WithEvents chkExt03 As System.Windows.Forms.CheckBox
    Friend WithEvents chkExt02 As System.Windows.Forms.CheckBox
    Friend WithEvents chkExt01 As System.Windows.Forms.CheckBox
    Friend WithEvents chkExt00 As System.Windows.Forms.CheckBox
    Friend WithEvents Label12 As System.Windows.Forms.Label
    Friend WithEvents radBas02 As System.Windows.Forms.RadioButton
    Friend WithEvents radBas01 As System.Windows.Forms.RadioButton
    Friend WithEvents radBas00 As System.Windows.Forms.RadioButton
    Friend WithEvents Label11 As System.Windows.Forms.Label
    Friend WithEvents radTop02 As System.Windows.Forms.RadioButton
    Friend WithEvents radTop01 As System.Windows.Forms.RadioButton
    Friend WithEvents radTop00 As System.Windows.Forms.RadioButton
    Friend WithEvents Label10 As System.Windows.Forms.Label
    Friend WithEvents cmdAddItem As System.Windows.Forms.Button
    Friend WithEvents pnlDrinks As System.Windows.Forms.Panel
    Friend WithEvents Label14 As System.Windows.Forms.Label
    Friend WithEvents Label13 As System.Windows.Forms.Label
    Friend WithEvents nudDrk03 As System.Windows.Forms.NumericUpDown
    Friend WithEvents nudDrk02 As System.Windows.Forms.NumericUpDown
    Friend WithEvents nudDrk01 As System.Windows.Forms.NumericUpDown
    Friend WithEvents nudDrk00 As System.Windows.Forms.NumericUpDown
    Friend WithEvents Label18 As System.Windows.Forms.Label
    Friend WithEvents Label17 As System.Windows.Forms.Label
    Friend WithEvents Label16 As System.Windows.Forms.Label
    Friend WithEvents Label15 As System.Windows.Forms.Label
    Friend WithEvents Label20 As System.Windows.Forms.Label
    Friend WithEvents Label19 As System.Windows.Forms.Label
    Friend WithEvents lblOderTotal As System.Windows.Forms.Label
    Friend WithEvents lblDeliveryCharge As System.Windows.Forms.Label
    Friend WithEvents lblOderValue As System.Windows.Forms.Label
    Friend WithEvents Label21 As System.Windows.Forms.Label
    Friend WithEvents cmdClear As System.Windows.Forms.Button
    Friend WithEvents cmdPrint As System.Windows.Forms.Button
    Friend WithEvents prtContinuation As System.Drawing.Printing.PrintDocument
    Friend WithEvents prtDeliveryNote As System.Drawing.Printing.PrintDocument

End Class
