package com.internousdev.ecsite.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import com.internousdev.ecsite.dto.MyPageDTO;
import com.internousdev.ecsite.util.DBConnector;

public class MyPageDAO {

	private DBConnector dbConnector = new DBConnector();
	private Connection connection = dbConnector.getConnection();

	public ArrayList<MyPageDTO> getMyPageUserInfo(String item_transaction_id,
			String user_master_id) throws SQLException{

		ArrayList<MyPageDTO> myPageDTO = new ArrayList<MyPageDTO>();
		String sql = "SELECT ubit.id, iit.item_name, ubit.total_price, ubit.total_count,ubit.pay, ubit.insert_date"
				+ "FROM user_buy_item_transaction ubit "
				+ "LEFT JOIN item_info_transaction iit"
				+ "ON ubit.item_transaction_id = iit.id"
				+ "WHERE ubit.item_transaction_id = ? AND ubit.user_master_id = ?"
				+ "ORDER BY insert_date DESC";

		try{
			PreparedStatement preparedStatement = connection.prepareStatement(sql);
			preparedStatement.setString(1, item_transaction_id);
			preparedStatement.setString(2, user_master_id);

			ResultSet resultSet = preparedStatement.executeQuery();

			while(resultSet.next()){
				MyPageDTO dto = new MyPageDTO();
				dto.setId(resultSet.getString("id"));
				dto.setItemName(resutSet.getString("item_name"));
				dto.setTotalPrice(resultSet.getString("total_price"));

			}
		}
	}

}