print("Bienvenido a calculadora sena ingresa los valores")
lista= list ()
i=0

while i < 5:
    i = i + 1

    contador2 = 0
    while contador2 < 5:
        contador2 += 1
        datos = input ("ingrese datos numericos, para finalizar digite x :")
        if datos == "x":
            break
        lista.append(datos)

        
    
    
    if datos == "x":
        print(lista)
        print("que deseas hacer con la lista?")
        print("digita 1 para sacar minimo de lista")
        print("digita 2 para sacar maximo de lista")
        opcion = input()


        if opcion =="1":
            print(min(lista))

        elif opcion == "2":
            print(max(lista))
 
    else:
        datos = datos
        lista.append(datos)

