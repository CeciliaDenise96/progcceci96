import tkinter as tk
from PIL import Image, ImageTk

ventana = tk.Tk()
ventana.title("Aplicación de jardinería")
ventana.geometry("300x200")

imagen_original = Image.open("1.jpeg")
imagen_redimensionada = imagen_original.resize((200,200))

imagen_tk = ImageTk.PhotoImage(imagen_redimensionada)

etiqueta_imagen = tk.Label(ventana, image=imagen_tk)
etiqueta_imagen.pack(pady=10)

etiqueta = tk.Label(ventana, text="¡Hola, bienvenido al sitio agroceci!")
etiqueta.pack(pady=20)

def al_hacer_click():
    etiqueta.config(text="¡Sección sustratos")

boton = tk.Button(ventana, text="Ingreso  a comprar productos", command=al_hacer_click)
boton.pack()

ventana.mainloop()