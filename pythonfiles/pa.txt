print("password generator")
password = input("type of password u want?")
def case(string):
    for a in string:
        if a.isupper() == 1:
            number(string)
            break
    else:
     print("weak password")


def number(string1):
    for b in string1:
        if b.isdigit()==1:
            print("strong password")
            break
    else:
     print("medium")
case(password)
