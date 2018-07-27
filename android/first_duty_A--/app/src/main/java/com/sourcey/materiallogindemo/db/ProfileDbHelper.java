package com.sourcey.materiallogindemo.db;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_IMG_TITLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_NAME_TITLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.PROFILE_TABLE;

public class ProfileDbHelper extends SQLiteOpenHelper {

    public ProfileDbHelper(Context context) {
        super(context, TaskContract.DB_NAME, null, TaskContract.DB_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        String createTable = "CREATE TABLE " + PROFILE_TABLE + " ( " +
                TaskContract.TaskEntry._ID + " INTEGER PRIMARY KEY AUTOINCREMENT, " +
                COL_NAME_TITLE + " TEXT, " +
                COL_IMG_TITLE + " TEXT NOT NULL);";

        db.execSQL(createTable);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS " + PROFILE_TABLE);
        onCreate(db);
    }
    public boolean insertPerson(String username, String img) {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues contentValues = new ContentValues();
        contentValues.put(COL_NAME_TITLE, username);
        contentValues.put(COL_IMG_TITLE, img);
        db.insert(PROFILE_TABLE, null, contentValues);
        return true;
    }

    public Cursor getPerson() {
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor res = db.rawQuery( "SELECT * FROM " + PROFILE_TABLE, null );
        return res;
    }
}
