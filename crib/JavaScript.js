typeof(x);			// Узнать тип переменной "х"
"x" in objectName;      // Есть ли свойство "х" в объекте (вернет boolean)
delete objectName.x;    // Удаляет свойство объекта (вернет boolean)


//============================================//

for (var key in objectName) {     // Бегает по всему объекту и достает все свойства и их значения
    print(key + ": " + objectName[key])
}

