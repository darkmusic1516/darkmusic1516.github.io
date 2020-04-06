import sqlite3

mydb = sqlite3.connect("phonebook.db")
cur = mydb.cursor()
create_table = "CREATE TABLE if not exists phone_table(name varchar(20), number int(10))"
cur.execute(create_table)

def input_data():
    name = input("enter name:\n")
    number = input("enter the number:\n")
    data_insert = "insert into phone_table(name,number) values(?,?)"
    data=(name,number)
    cur.execute(data_insert,data)
    mydb.commit()
    print("Record Saved!")

def no_check():
    name = input("enter name of saved person:\n")
    data_fetch = "select * from phone_table where name = ?"
    cur.execute(data_fetch,(name,))
    result = cur.fetchall()
    [(nm,no)] = result
    print("Number is:{}".format(no))

def update_record():
    nm = input("enter name of user:\n")
    newno = input("enter new number\n")
    data_update = "UPDATE phone_table set number = ? where name = ?"
    values=(newno,nm)
    cur.execute(data_update,values)
    mydb.commit()
    print("Record Updated!")

def delete_record():
    nm = input("enter user name:\n")
    data_delete = "DELETE from phone_table where name = ?"
    cur.execute(data_delete,(nm,))
    mydb.commit()
    print("Record deleted!")


while True:
    x=input("1.new Record\t\t2.check number\t\t3.update record\t\t4.Delete record")
    if x =='1':
        input_data()
    elif x == '2':
        no_check()
    elif x == '3':
        update_record()
    elif x == '4':
        delete_record()
    else:
        print("quiting")
        break
