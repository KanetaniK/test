
public class Test {

	public static void main(String[]args){

		Person taro = new Person();
		taro.name = "山田太郎";
		taro.age = 20;

		System.out.println(taro.name);
		System.out.println(taro.age);


		//演習2
		Person jiro = new Person();
		jiro.name = "木村次郎";
		jiro.age = 16;

		Person hanako = new Person();
		hanako.name = "鈴木花子";
		hanako.age = 16;

		Person kota = new Person();
		kota.name = "金谷恒大";
		kota.age = 25;

		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);

		System.out.println(kota.name);
		System.out.println(kota.age);
		System.out.println(kota.phoneNumber);
		System.out.println(kota.address);


		taro.talk();
		taro.walk();
		taro.run();


		Robot aibo = new Robot();
		aibo.name = "アイボ";
		aibo.talk();
		aibo.walk();
		aibo.run();

		Robot asimo = new Robot();
		asimo.name = "アシモ";
		asimo.talk();
		asimo.walk();
		asimo.run();

		Robot pepper = new Robot();
		pepper.name = "ペッパー";
		pepper.talk();
		pepper.walk();
		pepper.run();

		}

}
