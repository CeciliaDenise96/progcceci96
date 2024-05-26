# -*- coding: latin-1 -*-
import tkinter as tk
from PIL import ImageTk, Image
ventana = tk.Tk()
marco1 = tk.Frame(ventana, width=200, height=100, bd=2, relief = "solid")
marco1.pack()
def obtener_texto():
    texto_ingresado = cuadro_texto.get()
    etiqueta.config(text="Texto ingresado: " + texto_ingresado)
imagen = Image.open("estadocivil.png")
imagen_tk = ImageTk.PhotoImage(imagen)
etiqueta = tk.Label(marco1, image=imagen_tk)
etiqueta.pack()

etiqueta = tk.Label(marco1, text="Texto ingresado:")
etiqueta.pack()
cuadro_texto = tk.Entry(ventana, width = 30)
cuadro_texto.pack()

boton = tk.Button(ventana, text="Obtener texto ", command=obtener_texto)
boton.pack()

def obtener_seleccion():
    seleccionados = cuadro_lista.curselection()
    for index in seleccionados:
        elemento = cuadro_lista.get(index)
        print("Elemento seleccionado:", elemento)

ventana = tk.Tk()

cuadro_lista = tk.Listbox(ventana, width=30, selectmode="multiple")
cuadro_lista.pack()

elementos = ["Soltero", "Casado", "En pareja", "Con concentimiento"]

for elemento in elementos:
    cuadro_lista.insert(tk.END, elemento)

boton = tk.Button(ventana, text="Obtener", command=obtener_seleccion)
boton.pack()

ventana.mainloop()

