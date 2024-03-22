import os 
def limpar_tela(): #This function is used to clear the screen!
    os.system('cls' if os.name == 'nt' else 'clear')

def imc(a, b):#Function created to return the IMC
    if b == 0: #Validation of the division where the denominator is zero!
        print("The second number cant't be 0")
        while b == 0 or b < 0 or b > 2.6: #System to convert and modify if the number is 0
         if b > 2.6:
            return a/((b/100)**2)#Convert the height (CM to M)
        
         x = float(input("Height >> ")) #call the variable again
         b = x
    return a/(b**2) #return a value

def soma(a, b): #Function created to return the sum of variables
    return a+b

def sub(a, b): #Function created to return the subtractio of variables
    return a-b

def multi(a, b):#Function created to return the multiplication of variables
    return a*b
def div(a, b):#Function created to return the division of variables
    if b == 0: #That condition will verify the value of variable 
     print("The second number cant't be 0")
     while b == 0: #Loop if B equal zero
      b = float(input("Second number >> "))
    
     return a/b
    else:
     return a/b
def index(): #This function is the body of the calculator
 lock = True #The variable is a key to stop the loop
 while lock: #This While must create a loop 
    limpar_tela() #You are calling the function to clear the screen
    print("1 - IMC | peso / altura x altura")
    print("2 - Multiplicação | a x b ")
    print("3 - Substração | a-b ")
    print("4 - Divisão | a/b ")
    print("5 - Soma | a+b")
    print("6 - Sair")
    escolha = input("Escolha(número) >> ")
    limpar_tela()
   
    if escolha == "1":
        first_number = float(input("Your weight (kg) >> "))
        second_number = float(input("Your height (m or cm) >> "))
        result = imc(first_number, second_number)  # Store the result of imc calculation
        print(" ")
        if second_number != 0:
            print("Resposta >> ", result)  # Use the stored result
        if result < 18.5:
            print("Abaixo do peso | IMC > ",result)
        elif 18.5 <= result <= 24.9:
            print("Peso ideal | IMC > ",result)
        elif 25 <= result <= 29.9:
            print("Levemente acima do peso | IMC > ",result)
        elif 30 <= result <= 34.9:
            print("Obesidade grau 1 | IMC > ",result)
        elif 35 <= result <= 39.9:
            print("Obesidade grau 2 (severa) | IMC > ",result)
        else:
            print("Obesidade grau 3 (mórbida) | IMC > ",result)

        print(" ")
        input("Press something")

    elif escolha == "2":
        print("Modo -> 2 | Multiplicação")
        first_number = float(input("First number >> "))
        second_number = float(input("Second number >> "))
        print("Resposta >> ",multi(first_number, second_number))
        input("Press something")
    elif escolha == "3":
        print("Modo -> 3 | Subtração")
        first_number = float(input("First number >> "))
        second_number = float(input("Second number >> "))
        print("Resposta >> ",sub(first_number, second_number))
        input("Press something")
    elif escolha == "4":
        print("Modo -> 4 | Divisão")
        first_number = float(input("First number >> "))
        second_number = float(input("Second number >> "))
        print("Resposta >> ",div(first_number, second_number))
        input("Press something")
    elif escolha == "5":
        print("Modo -> 5 | Soma")
        first_number = float(input("First number >> "))
        second_number = float(input("Second number >> "))
        print("Resposta >> ",soma(first_number, second_number))
        input("Press something")
    elif escolha == "6":
        lock = False #Breaking the loop
    else:
        print("Digite um número presente nas opções!")
        input("Press something")

index()

