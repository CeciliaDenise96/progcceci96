# -*- coding: latin-1 -*-
import tkinter as tk

ventana = tk.Tk()
def obtener_texto():
    texto_ingresado = cuadro_texto.get()
    etiqueta.config(text="Texto ingresado: " + texto_ingresado)

etiqueta = tk.Label(ventana, text="Ingrese su estado civil:", bg="white", fg="black", font = ("Arial", 16), width = 20 , height= 2 , anchor = "center")
etiqueta.pack()
cuadro_texto = tk.Entry(ventana, width = 30)
cuadro_texto.pack()

boton = tk.Button(ventana, text="Estado: ", command="obtener_texto")
boton.pack()

ventana.mainloop()
